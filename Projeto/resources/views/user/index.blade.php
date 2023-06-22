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
                    <th> Exibir </th>
                    <th> Editar </th>
                    <th> Deletar </th>
                
                </tr>

            </thead>

            <tbody>
 
                @foreach ($user as $u)
                <tr>
                    
                    <td>{{ $u->name }}</td>   
                    <td><a href="{{ route('user.show', $u->id) }}">Exibir</a></td>
                    <td><a href="{{ route('user.edit', $u->id) }}">Editar</a></td>
                    <td><a href="{{ route('user.destroy', $u->id) }}">Deletar</a></td>
                
                </tr>
                @endforeach

            </tbody>


        </table>
     


    </body>

</html>