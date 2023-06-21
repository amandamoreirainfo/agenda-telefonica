<!DOCTYPE html>
<html>

    <head>

        <meta charset="UTF-8">
        <title>Cadastrar Usuário</title>
    
    </head>

    <body>

        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            Nome:<input type="text" name="name" id="name">
            E-mail:<input type="text" name="email" id="email">
            Data de Nascimento:<input type="text" name="date_of_birth" id="date_of_birth">
            CPF:<input type="cpf" name="cpf" id="cpf">
            Telefone:<input type="text" name="telephone" id="telephone">

            <input type="submit" name="Salvar">


        </form>



    </body>

</html>