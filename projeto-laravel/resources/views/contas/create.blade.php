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
    <form action="{{route('conta.store')}}" method="post">

        <button type="submit">Cadastrar</button>
    </form>


</body>

</html>