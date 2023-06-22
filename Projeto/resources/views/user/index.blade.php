<!DOCTYPE html>
<html>

    <head>

        <meta charset="UTF-8">
        <title>Lista de Usuários</title>
    
    </head>

    <body>

        <table class="data-table">

            <thead>

                <tr>
                    
                    <th> Nome </th>
                    <th> E-mail </th>
                    <th> Data de Nascimento </th>
                    <th> CPF </th>
                    <th> Telefone </th>
                    <th> Editar </th>
                    <th> Deletar </th>
                
                </tr>

            </thead>

            <tbody>

                @foreach($user as $u)
                <tr>
                    
                    <td>{{ $u->name }}</td>
                    <td>{{ $u->emai }}</td>
                    <td>{{ $u->date_of_birth }}</td>
                    <td>{{ $u->cpf }}</td>
                    <td>{{ $u->telephone }}</td>
                    <td><input type="submit" name="Editar"></td>
                    <td><input type="submit" name="Deletar"></td>
                
                </tr>
                @endforeach

            </tbody>


        </table>
     


    </body>

</html>