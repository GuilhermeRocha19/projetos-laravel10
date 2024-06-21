<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contas a Pagar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            color: #333;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .text-center {
            text-align: center;
        }

        .no-accounts {
            color: #f00;
            text-align: center;
        }

        .total {
            text-align: right;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h1>Contas a Pagar</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Valor</th>
                <th>Vencimento</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($contas as $conta)
                <tr>
                    <td>{{ $conta->id }}</td>
                    <td>{{ $conta->nome }}</td>
                    <td>{{ 'R$' . number_format($conta->valor, 2, ',', '.') }}</td>
                    <td>{{ \Carbon\Carbon::parse($conta->vencimento)->tz('America/Sao_Paulo')->format('d/m/Y') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="no-accounts">Nenhuma conta encontrada</td>
                </tr>
            @endforelse
        </tbody>
            <tfoot>
                <tr>
                    <td colspan="2" class="total">Total</td>
                    <td colspan="2" class="total">{{ 'R$' . number_format($valorTotal, 2, ',', '.') }}</td>
                </tr>
            </tfoot>
    </table>
</body>

</html>
