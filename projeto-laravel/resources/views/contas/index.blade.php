<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke</title>
</head>

<body>

    <a href="{{route('conta.create')}}">Cadastrar</a>

    <h2>Listar as Contas</h2>


    <!-- 
    <a href="{{route('conta.show')}}">Visualizar</a><br>
    <a href="{{route('conta.edit')}}">Editar</a><br>
    <a href="{{route('conta.destroy')}}">Apagar</a> -->


    @forelse ($contas as $conta)
        ID: {{$conta->id}} <br>
        Nome: {{$conta->nome}} <br>
        Valor: {{'R$'. number_format($conta->valor, 2,',','.')}} <br>
        Vencimento: {{\Carbon\Carbon::parse($conta->vencimento)->tz('America/Sao_Paulo')->format('d/m/Y')}} <br>
        <hr>
    @empty
        <span style="color: #f00;"> Nenhuma conta encontrada</span>
    @endforelse


</body>

</html>