<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
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
            <th>Razão Social</th>
            <th>CPF/CNPJ</th>
            <th>Situação</th>
            <th>Telefone</th>
            <th>Data de Cadastro</th>
        </tr>
        @foreach ($clientes as $cliente)
        <tr>
            <td>{{ $cliente->id }}</td>
            <td>{{ $cliente->razaoSocial }}</td>
            <td>{{ $cliente->cpf_cnpj }}</td>
            <td>{{ $cliente->situacao }}</td>
            <td>{{ $cliente->telefone }}</td>
            <td>{{ $cliente->dataCadastro }}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>