<?php

namespace oliamerica\Http\Controllers\Admin;

use Illuminate\Http\Request;
use oliamerica\Noticia;
use oliamerica\ViewModels\NoticiaViewModel;

use oliamerica\Http\Requests;
use oliamerica\Http\Controllers\Controller;

class NoticiaController extends Controller
{
    public function crear(){
        $viewModel = new NoticiaViewModel;
        $viewModel->inicializarCrearViewModel();
        $model = Noticia::iniciar();
        return view('admin.noticia.formulario',['viewModel' => $viewModel, 'model' => $model]);
    }

    public function guardar(Request $request){
        $data = $request->all();
        $noticia = Noticia::crear($data);
        $noticia->save();
        \Session::flash('message', 'La noticia se guardo correctamente'); 
        \Session::flash('alert-class', 'alert-success');
        return redirect()->action('Admin\NoticiaController@index');
    }

    public function subirArchivo($llaveArchivo){
        $rutaDestino = 'uploads'; // upload path
        $extension = \Input::file($llaveArchivo)->getClientOriginalExtension(); // getting imagen extension
        $nombreArchivo = \Input::file($llaveArchivo)->getClientOriginalName();
        \Input::file($llaveArchivo)->move($rutaDestino, $nombreArchivo);
        return $nombreArchivo;
    }

    public function index(){
        $noticias = \DB::table('noticias')->paginate(6);
        return view('admin.noticia.index', ['noticias' => $noticias]);
    }

    public function editar(Request $request,$id){
        $viewModel = new NoticiaViewModel;
        $viewModel->inicializarEditarViewModel($id);
        $model = Noticia::find($id);
        return view('admin.noticia.formulario',['viewModel' => $viewModel, 'model' => $model]);
    }

    public function actualizar(Request $request,$id){
        $data = $request->all();
        $noticia = Noticia::find($id);
        $noticia->editar($data);
        $noticia->save();
        return redirect()->action('Admin\NoticiaController@index');
    }
}
