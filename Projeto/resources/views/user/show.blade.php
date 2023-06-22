<!DOCTYPE html>
<html>

    <head>

        <meta charset="UTF-8">
        <title>Visualizar os dados do Usuário</title>
    
    </head>

    <body>

        @if (isset($msg))

            <h2>Usuário não encontrado!</h2>
            
        @else

                
            <h2>Visualizar dados do Usuário</h2>
            <p><strong>Nome:</strong>{{ $user->name }}</p>
            <p><strong>E-mail:</strong>{{ $user->email }}</p>
            <p><strong>Data de Nascimento:</strong>{{ $user->date_of_birth }}</p>
            <p><strong>CPF:</strong>{{ $user->cpf }}</p>
            <p><strong>Telefone:</strong>{{ $user->telephone }}</p>
            <a href="{{ route('user.index') }} ">Voltar</a>
            <a href="{{ route('user.destroy', $user->id) }}">Deletar</a>
        
        @endif

    </body>

</html>