<?php

namespace oliamerica\Http\Controllers;

use Illuminate\Http\Request;

use oliamerica\Http\Requests;
use oliamerica\Http\Controllers\Controller;

class SeguridadController extends Controller
{
    public function login(Request $request){
        $data = $request->all();
        $rememberMe = false;
        if (\Auth::attempt(['email' => $data['email'], 'password' => $data['password']],$rememberMe)) {
            return redirect('/admin/noticia');
        }
        return redirect('/auth/login');
    }

    public function logout(){
        \Auth::logout();
        return redirect('/auth/login');
    }
}
