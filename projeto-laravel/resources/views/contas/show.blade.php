<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke</title>
</head>

<body>

    <a href="{{route('conta.index')}}">Listagem</a>

    <h2>Detalhes da Conta</h2>
    <!-- Verificar se existe a sessão sucess e imprimir o valor -->
    @if(session('sucess'))
    <span style="color:#082;">
        {{session('sucess')}}
    </span>
    @endif


</body>

</html>