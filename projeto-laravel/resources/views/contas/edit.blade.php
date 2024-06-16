<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto</title>
</head>

<body>
    <a href="{{ route('conta.index') }}"><button>Listagem</button></a>
    <a href="{{ route('conta.show', ['conta' => $conta->id]) }}"><button>Visualizar</button></a>
    
    <h2>Editar a Conta</h2>

    @if (session('error'))
    <span style="color:red;">
        {{ session('error') }}
    </span><br>
@endif <br>

    @if($errors->any())
    <span style="color:red;">
        @foreach($errors->all() as $error)
        {{$error}} <br>
        @endforeach
    </span>
    @endif

    <form action="{{ route('conta.update',['conta'=> $conta->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nome">Nome</label>
        <input type="text" name="nome" value="{{ old('nome',$conta->nome) }}"><br>

        <label for="valor">Valor</label>
        <input type="text" name="valor" value="{{ old('valor',$conta->valor) }}"><br>

        <label for="vencimento">Vencimento</label>
        <input type="date" name="vencimento" value="{{ old('vencimento',$conta->vencimento) }}"><br>

        <br>

        <button type="submit">Editar</button>

    </form>

</body>

</html>
