<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contas</title>
</head>

<body>

    <a href="{{ route('conta.create') }}"><button>Cadastrar</button></a>

    <h2>Listar as Contas</h2>


    @if (session('sucess'))
        <span style="color:#082;">
            {{ session('sucess') }}
        </span><br>
    @endif <br>


    @forelse ($contas as $conta)
        ID: {{ $conta->id }} <br>
        Nome: {{ $conta->nome }} <br>
        Valor: {{ 'R$' . number_format($conta->valor, 2, ',', '.') }} <br>
        Vencimento: {{ \Carbon\Carbon::parse($conta->vencimento)->tz('America/Sao_Paulo')->format('d/m/Y') }} <br>
        <a href="{{ route('conta.show', ['conta' => $conta->id]) }}"><button>Visualizar</button></a>
        <br>
        <a href="{{ route('conta.edit', ['conta' => $conta->id]) }}">
            <button>Editar</button></a> <br>

        <form action="{{ route('conta.destroy', ['conta' => $conta->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Você deseja apagar este registro?')">Apagar</button>
        </form>

        <br>
        <hr>
    @empty
        <span style="color: #f00;"> Nenhuma conta encontrada</span>
    @endforelse


</body>

</html>
