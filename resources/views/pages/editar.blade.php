@extends('layouts.master')

@section ('title', 'editar')

@section('content')
            <script>
            let usuarionome = $usuario->name;
            let usuarioemail = $usuario->email;
            let usuariophone = $usuario->phone;
            </script>

<h1> Editar Informações do usuário </h1>

   <form action="{{ route('contact.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Novo nome do contato" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email"  placeholder="Novo email do contato" required>
        </div>

         <div class="mb-3">
            <label for="phone" class="form-label">Telefone</label>
            <input type="phone" class="form-control" id="phone" name="phone" placeholder="Novo telefone do contato" required>
        </div>

        <button type="submit" > Salvar </button>
    </form>
@endsection