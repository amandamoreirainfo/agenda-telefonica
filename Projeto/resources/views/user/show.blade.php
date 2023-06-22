<!DOCTYPE html>
<html>

    <head>

        <meta charset="UTF-8">
        <title>Visualizar os dados do Usuário</title>
    
    </head>

    <body>

       <h2>Visualizar dados do Usuário</h2>

       <p><strong>Nome:</strong>{{ $user->name }}</p>
       <p><strong>E-mail:</strong>{{ $user->email }}</p>
       <p><strong>Data de Nascimento:</strong>{{ $user->date_of_birth }}</p>
       <p><strong>CPF:</strong>{{ $user->cpf }}</p>
       <p><strong>Telefone:</strong>{{ $user->telephone }}</p>

       <a href="{{ route('user.index') ">Voltar</a>


    </body>

</html>