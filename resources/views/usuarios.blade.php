<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
    <style>
        table {
            text-align: center;
            border-collapse: collapse;
        }

        table td {
            border: 1px solid black;
        }

        table th {
            border: 1px solid black;
            background: #c1d8e3;
        }
    </style>
</head>

<body>


    <table style="width:100%">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Senha</th>
        </tr>
        @foreach ($usuarios as $usuario)
        <tr>
            <td>{{ $usuario->id }}</td>
            <td>{{ $usuario->nome }}</td>
            <td>{{ $usuario->email }}</td>
            <td>{{ $usuario->password }}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>