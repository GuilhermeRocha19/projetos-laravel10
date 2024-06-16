<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contas</title>
</head>

<body>

    <a href="{{ route('conta.create') }}">Cadastrar</a>

    <h2>Listar as Contas</h2>





    @forelse ($contas as $conta)
        ID: {{ $conta->id }} <br>
        Nome: {{ $conta->nome }} <br>
        Valor: {{ 'R$' . number_format($conta->valor, 2, ',', '.') }} <br>
        Vencimento: {{ \Carbon\Carbon::parse($conta->vencimento)->tz('America/Sao_Paulo')->format('d/m/Y') }} <br>
        <a href="{{ route('conta.show', ['conta' => $conta->id]) }}">Visualizar</a>
        <a href="{{ route('conta.edit', ['conta' => $conta->id]) }}">Editar</a>
        
        <br>
        <hr>
    @empty
        <span style="color: #f00;"> Nenhuma conta encontrada</span>
    @endforelse


</body>

</html>
