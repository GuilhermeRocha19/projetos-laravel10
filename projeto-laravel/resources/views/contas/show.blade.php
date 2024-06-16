<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto</title>
</head>

<body>

    <a href="{{ route('conta.index') }}"><button>Listagem</button></a>

    <h2>Detalhes da Conta</h2>
    <!-- Verificar se existe a sessão sucess e imprimir o valor -->
    @if (session('sucess'))
        <span style="color:#082;">
            {{ session('sucess') }}
        </span><br>
    @endif

    ID: {{ $conta->id }}<br>
    Nome: {{ $conta->nome }}<br>
    Valor: {{ number_format($conta->valor, 2, ',', '.') }}<br>
    Vencimento: {{ \Carbon\Carbon::parse($conta->vencimento)->tz('America/Sao_Paulo')->format('d/m/Y') }}<br>
    Data Criação: {{ \Carbon\Carbon::parse($conta->created_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}<br>
    Última Alteração:
    {{ \Carbon\Carbon::parse($conta->updated_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}<br>
    <br>
    <a href="{{ route('conta.edit', ['conta' => $conta->id]) }}"><button>Editar</button></a>

</body>

</html>
