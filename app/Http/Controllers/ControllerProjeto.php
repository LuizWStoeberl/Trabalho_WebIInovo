<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerProjeto extends Controller
{
    public function home(){
        
        return view('pages.home');
    }

    public function contacts(){
        return view('pages.contatos');
    }

    public function edicao(){
        return view('pages.editar');
    }
}
