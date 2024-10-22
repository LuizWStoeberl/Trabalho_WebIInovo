<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contacts;

class Contato extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
        ]);

        contacts::create($validated);

        return redirect()->route('pagicontatos')->with('sucess', 'Mensagem enviada com sucesso!');
    }
}
