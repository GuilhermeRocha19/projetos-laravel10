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
    <form action="{{ route('conta.store') }}" method="POST">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" required><br>

        <label for="valor">Valor</label>
        <input type="text" name="valor" required><br>

        <label for="vencimento">Vencimento</label>
        <input type="date" name="vencimento" required><br>

        <button type="submit">Cadastrar</button>
    </form>


</body>

</html>