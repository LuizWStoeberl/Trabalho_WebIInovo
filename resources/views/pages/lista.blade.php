@extends('layouts.master')

@section('title', 'lista')

@section('content')

<h1 class="titulo"> Lista de contatos </h1>
    
    <br>
        @foreach($usuarios as $usuario)
        <div class="contatodentrolista">
                
                <div class="usuarioslista">
                    <p>Nome: {{ $usuario->name}} </p>  
                    <p>Email: {{ $usuario->email}} </p>
                    <p>Telephone: {{$usuario->phone}} </p>
                </div>
                
        <div class="botoeslista">
            <form action="{{ route('excluirContato', $usuario->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Deseja exlcuir esse contato?')" class="btn btn-outline-primary"> 
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
</svg>
           
            </button>
            </form>

            <a  href="{{ route('buscarContato', $usuario->name)}}"> 
            <button type="button" class="btn btn-outline-primary">
   
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
</svg>
            </button>
            </a>    
           
            </div>
           <br>  
            </div>
       
        @endforeach
       <br>
       <br>
    <div class="voltarparamenu">
    <a href="/" >
    <button type="button" class="btn btn-outline-primary"> Voltar para o menu inicial </button>
    </a>
    </div>

    <footer >
        <p>&copy; 2024 Meu Site. Todos os direitos reservados.</p>
    </footer>
@endsection