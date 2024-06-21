@extends('components/alert')
@extends('layouts/admin')
@section('content')
    <div class="card mt-4 mb-4 border-light shadow">
        <div class="card-header d-flex justify-content-between">
            <span>Cadastrar Conta</span>
            <span>
                <a href="{{ route('conta.index') }}" class="btn btn-info btn-sm me-1">Listagem</a>
            </span>
        </div>


        <div class="card-body">
            <form action="{{ route('conta.store') }}" method="POST" class="row g-3">
                @csrf
                <div class="col-md-12">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" name="nome" id="nome" value="{{ old('nome') }}"
                        class="form-control">
                </div>

                <div class="col-md-12">
                    <label for="valor" class="form-label">Valor</label>
                    <input type="text" name="valor" id="valor"
                        value="{{ old('valor') }}"
                        class="form-control">
                </div>

                <div class="col-md-12">
                    <label for="vencimento" class="form-label">Vencimento</label>
                    <input type="date" name="vencimento" id="vencimento"
                        value="{{ old('vencimento') }}" class="form-control">
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-warning btn-sm">Cadastrar</button>
                </div>
            </form>
        </div>
    @endsection
