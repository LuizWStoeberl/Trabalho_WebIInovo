@extends('layouts.master')

@section ('title', 'editar')

@section('content')
            
<h1> Editar Informações de {{ $contato->name}} </h1>
    
   <form action="{{ route('atualizarContato', $contato->id)}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">
            Nome
            </label> 
            <input type="text" class="form-control" id="name" name="name" value="{{ $contato->name}}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">
            Email
            </label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $contato->email}}" required>
        </div>

         <div class="mb-3">
            <label for="phone" class="form-label">
            Telefone
            </label>
            <input type="phone" class="form-control" id="phone" name="phone" value="{{ $contato->phone}}" required>
        </div>

        <button type="submit" > Atualizar </button>
    </form>
    
@endsection