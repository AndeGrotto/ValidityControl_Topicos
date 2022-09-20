<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itens de Pedidos</title>
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
            <th>Quantidade de Itens</th>
            <th>Valor total</th>
        </tr>
        @foreach ($itensPedidos as $itensPedido)
        <tr>
            <td>{{ $itensPedido->id }}</td>
            <td>{{ $itensPedido->quantidadeItem }}</td>
            <td>R$ {{ $itensPedido->valorTotal }}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>