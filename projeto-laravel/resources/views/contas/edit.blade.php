@extends('layouts/admin')
@section('content')



    <a href="{{ route('conta.index') }}"><button>Listagem</button></a>
    <a href="{{ route('conta.show', ['conta' => $conta->id]) }}"><button>Visualizar</button></a>

    <h2>Editar a Conta</h2>

    @if (session('error'))
        <span style="color:red;">
            {{ session('error') }}
        </span><br>
    @endif <br>

    @if ($errors->any())
        <span style="color:red;">
            @foreach ($errors->all() as $error)
                {{ $error }} <br>
            @endforeach
        </span>
    @endif

    <form action="{{ route('conta.update', ['conta' => $conta->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nome">Nome</label>
        <input type="text" name="nome" value="{{ old('nome', $conta->nome) }}"><br>

        <label for="valor">Valor</label>
        <input type="text" id="valor" name="valor"
            value="{{ old('valor', isset($conta->valor) ? number_format($conta->valor, 2, ',', '.') : '') }}"><br>

        <label for="vencimento">Vencimento</label>
        <input type="date" name="vencimento" value="{{ old('vencimento', $conta->vencimento) }}"><br>

        <br>


        <button type="submit">Editar</button>

    </form>

@endsection
