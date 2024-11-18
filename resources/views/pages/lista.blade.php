@extends('layouts.master')

@section('title', 'lista')

@section('content')

<h1> Lista de contatos </h1>
    
    <br>
        @foreach($usuarios as $usuario)
        <div>
        <div>
        <br>
                <div >
                    {{ $usuario->name}}
                </div>
                    
                <div>
                    {{ $usuario->email}}
                </div>

                <div>
                    {{$usuario->phone}} 
                </div>
        </div>
            <form action="{{ route('excluirContato', $usuario->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Deseja exlcuir esse contato?')"> deletar </button>
            </form>

            <a  href="{{ route('buscarContato', $usuario->name)}}"> 
            <button>    
            Editar
            </button>
            </a>    
        </div>
        @endforeach
       <br>
    <a href="/">
    <button> Voltar para o menu inicial </button>
    </a>
    <br>
   
@endsection