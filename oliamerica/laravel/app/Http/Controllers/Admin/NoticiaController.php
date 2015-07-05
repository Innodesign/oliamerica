<?php

namespace oliamerica\Http\Controllers\Admin;

use Illuminate\Http\Request;
use oliamerica\Noticia;

use oliamerica\Http\Requests;
use oliamerica\Http\Controllers\Controller;

class NoticiaController extends Controller
{
    public function crear(){
        return view('admin.noticia.crear');
    }

    public function guardar(Request $request){

        $nombreArchivo = $this->subirArchivo("imagen");

        $data = $request->all();
        $data["nombreArchivo"] = $nombreArchivo;
        $noticia = new Noticia($data);
        $noticia->save();
    }

    public function subirArchivo($llaveArchivo){
        $rutaDestino = 'uploads'; // upload path
        $extension = \Input::file($llaveArchivo)->getClientOriginalExtension(); // getting imagen extension
        $nombreArchivo = \Input::file($llaveArchivo)->getClientOriginalName();
        \Input::file($llaveArchivo)->move($rutaDestino, $nombreArchivo);
        return $nombreArchivo;
    }

    public function index(){
        $noticias = \DB::table('noticias')->paginate(2);
        return view('admin.noticia.index', ['noticias' => $noticias]);
    }
}
