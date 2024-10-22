<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contacts;

class ControllerUsuario extends Controller
{
    public function index(){
        //busca os registros da tabela contacts
        $usuarios = contacts::all();

        return view('pages.lista', ['usuarios' => $usuarios]);
    }
    
    public function editar(){
        
        $editarusuario = contacts::where('name', '$usuarionome')
                                   ->where('email', '$usuarioemail')
                                   ->where('phone', '$usuariophone')
                                   ->get();
        
        return view('pages.editar', ['editarusuario' => $editarusuario]);
    }
}
