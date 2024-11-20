@extends('layouts.master')

@section('title', 'contatos')

@section('content')
    <h1 class="titulo"> Contatos </h1>
    <form action="{{ route('contact.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">
            
            Nome
            </label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">
            Email
            
            </label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
    
         <div class="mb-3">
            <label for="phone" class="form-label">
            Telefone
            </label>
            <input type="phone" class="form-control" id="phone" name="phone" required>
        </div>
    <div class="botoespagicontato">
    <div>
        <button type="submit" class="btn btn-outline-primary">Salvar </button>
    </form>
    </div>
    <div class="menu">
    <a href="/">
        <button type="button" class="btn btn-outline-primary"> Voltar para o menu inicial </button>
    </a>
    </div>
    <div class="contatos">
     <a href="/listacontatos">
    <button type="button" class="btn btn-outline-primary"> Ir para a lista de contatos </button>
    </a>
    </div>
    </div>

    <footer>
        <p>&copy; 2024 Meu Site. Todos os direitos reservados.</p>
    </footer>
@endsection