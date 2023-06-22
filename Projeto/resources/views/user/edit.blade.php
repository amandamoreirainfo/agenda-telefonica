<!DOCTYPE html>
<html>

    <head>

        <meta charset="UTF-8">
        <title>Editar Usuário</title>
    
    </head>

    <body>

        @extends('user.layout')
       
        <form action="{{route('user.update', $user->id)}}" method="POST">

            @csrf
            @method('PUT')
            Nome:<input type="text" name="name" id="name" value="{{ $users->name }} ">
            E-mail:<input type="text" name="email" id="email" value="{{ $users->email }}">
            Data de Nascimento:<input type="text" name="date_of_birth" id="date_of_birth" value="{{ $users->date_of_birth }}">
            CPF:<input type="text" name="cpf" id="cpf" value="{{ $users->cpf}}">
            Telefone:<input type="text" name="telephone" id="telephone" value="{{ $users->telephone }}">

            <input type="submit" name="Salvar">
            <input type="reset" name="Limpar">


        </form>


    </body>

</html>