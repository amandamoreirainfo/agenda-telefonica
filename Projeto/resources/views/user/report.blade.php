<!DOCTYPE html>
<html>

    <head>

        <meta charset="UTF-8">
        <title>Relatorio - Agenda Telefonica</title>
    
    </head>

    <body>

        <table class="data-table">

            <thead>

                <tr>
                    
                    <th> Nome </th>
             
                
                </tr>

            </thead>

            <tbody>
 
                @foreach ($users as $user)
                <tr>
                    
                    <td>{{ $user->name }}</td>   
               
                </tr>
                @endforeach

            </tbody>


        </table>