<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
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
            <th>Descrição</th>
            <th>Validade</th>
            <th>Preço</th>
            <th>Tipo de Bebida</th>
        </tr>
        @foreach ($produtos as $produto)
        <tr>
            <td>{{ $produto->id }}</td>
            <td>{{ $produto->descricao }}</td>
            <td>{{ $produto->validade }}</td>
            <td>R$ {{ $produto->preco }}</td>
            <td>{{ $produto->tipoBebida }}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>