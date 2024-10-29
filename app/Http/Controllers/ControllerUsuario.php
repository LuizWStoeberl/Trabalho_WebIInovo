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
    

    public function buscarContato($name){
        $contato = contacts::where( 'name', $name)->first();
        return view('pages.editar',  compact('contato'));
        
    }

    public function atualizarContato(Request $request, $id){
        $contato = contacts::find($id);

        if(!$contato){
            return redirect()->back()->with('error', 'Contato não encontrado!');
        }
        
        $contato->name = $request->name;
        $contato->email = $request->email;
        $contato->phone = $request->phone;
        $contato->save();
        return redirect()->route('listacontatos');
    }

    
}
