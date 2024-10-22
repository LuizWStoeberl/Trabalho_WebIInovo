@extends('layouts.master')

@section('title', 'lista')

@section('content')
    <h1> lista de usuários </h1>
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
            
            <button> deletar </button>
           

            <a href="/edicaousuario"> 
            <button>    
            
            Editar

            <script>
            let usuarionome = $usuario->name;
            let usuarioemail = $usuario->email;
            let usuariophone = $usuario->phone;
            </script>

            </button>
            </a>    
        </div>
        @endforeach
       <br>
    <a href="/">
    <button> Voltar para o menu inicial </button>
    </a>
@endsection