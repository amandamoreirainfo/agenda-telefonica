<!DOCTYPE html>
<html>

    <head>

        <meta charset="UTF-8">
        <title>Usuários - Agenda Telefonica</title>
    
    </head>

    <body>

        @extends(user.layout)

        <h2>Agenda Telefonica</h2>

        @if (!isset($user))

            <h3>Nenhum Usuário Cadastrado!</h3>
        
        @else

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
 
                @foreach ($users as $user)
                <tr>
                    
                    <td>{{ $user->name }}</td>   
                    <td><a href="{{ route('user.show', $user->id) }}">Exibir</a></td>
                    <td><a href="{{ route('user.edit', $user->id) }}">Editar</a></td>
                    <td><a href="{{ route('user.destroy', $user->id) }}">Deletar</a></td>
                
                </tr>
                @endforeach

            </tbody>

        </table>

        @if(isset($msg))

            <script>

                alert("{{$msg}}");

            </script>
        
    
     

    </body>

</html>