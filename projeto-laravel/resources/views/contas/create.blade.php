@extends('layouts/admin')
@section('content')



    <a href="{{ route('conta.index') }}"><button>Listagem</button></a>

    <h2>Cadastrar a Conta</h2>

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
    <br>

    <form action="{{ route('conta.store') }}" method="POST">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" value="{{ old('nome') }}"><br>

        <label for="valor">Valor</label>
        <input type="text" name="valor" id="valor" value="{{ old('valor') }}"><br>

        <label for="vencimento">Vencimento</label>
        <input type="date" name="vencimento" value="{{ old('vencimento') }}"><br>

        <button type="submit">Cadastrar</button>
    </form>

    
@endsection
