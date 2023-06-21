<!DOCTYPE html>
<html>

    <head>

        <meta charset="UTF-8">
        <title>Cadastrar Usuário</title>
    
    </head>

    <body>

        <form action="{{ route('user.update') }}" method="POST">
            @csrf
            Nome:<input type="text" name="name" id="name" value="{{ user->name }} ">
            E-mail:<input type="text" name="email" id="email" value="{{ user->email }}">
            Data de Nascimento:<input type="text" name="date_of_birth" id="date_of_birth" value="{{ user->date_of_birth }}">
            CPF:<input type="cpf" name="cpf" id="cpf" value="{{ user->cpf}}">
            Telefone:<input type="text" name="telephone" id="telephone" value="{{ user->telephone }}">

            <input type="submit" name="Salvar">
            <input type="reset" name="Limpar">


        </form>



    </body>

</html>