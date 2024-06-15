<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke</title>
</head>

<body>

    <a href="{{route('conta.index')}}">Listagem</a>

    <h2>Cadastrar a Conta</h2>

    @if($errors->any())
    <span style="color:red;">
        @foreach($errors->all() as $error)
        {{$error}} <br>
        @endforeach
    </span>
    @endif
    <br>

    <form action="{{ route('conta.store') }}" method="POST">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" value="{{ old('nome') }}"><br>

        <label for="valor">Valor</label>
        <input type="text" name="valor" value="{{ old('valor') }}"><br>

        <label for="vencimento">Vencimento</label>
        <input type="date" name="vencimento" value="{{ old('vencimento') }}"><br>

        <button type="submit">Cadastrar</button>
    </form>


</body>

</html>