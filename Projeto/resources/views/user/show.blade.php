<!DOCTYPE html>
<html>



    <head>

        <meta charset="UTF-8">
        <title>Visualizar os dados do Usuário</title>
    
    </head>

    <body>

    
        @extends('user.layout')

        @if (isset($msg))

            <h2>Usuário não encontrado!</h2>
            
        @else

         
            <h2>Visualizar dados do Usuário</h2>
            <p><strong>Nome:</strong>{{ $users->name }}</p>
            <p><strong>E-mail:</strong>{{ $users->email }}</p>
            <p><strong>Data de Nascimento:</strong>{{ $users->date_of_birth }}</p>
            <p><strong>CPF:</strong>{{ $users->cpf }}</p>
            <p><strong>Telefone:</strong>{{ $users->telephone }}</p>
            <a href="{{ route('user.index') }} ">Voltar</a>
            <a href="{{ route('user.destroy', $users->id) }}">Deletar</a>
        
        @endif

    </body>

</html>