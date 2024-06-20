@extends('layouts/admin')
@section('content')
    <div class="card mt-3 mb-4 border-light shadow">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span>Pesquisar</span>
        </div>
        <div class="card-body">
            <form action="{{ route('conta.index') }}">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <label class="form-label" for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome da Conta" value="{{ $nome }}">
                    </div>
    
                    <div class="col-md-3 col-sm-12">
                        <label class="form-label" for="data_inicio">Data Início</label>
                        <input type="date" name="data_inicio" id="data_inicio" class="form-control" value="{{ $data_inicio }}">
                    </div>
    
                    <div class="col-md-3 col-sm-12">
                        <label class="form-label" for="data_final">Data Final</label>
                        <input type="date" name="data_final" id="data_final" class="form-control" value="{{ $data_final }}">
                    </div>
    
                    <div class="col-md-3 col-sm-12 mt-3 pt-4">
                        <button type="submit" class="btn btn-info btn-sm">Pesquisar</button>
                        <a href="{{ route('conta.index') }}" class="btn btn-info btn-sm">Limpar</a>
                    </div>
                </div>
            </form>
    
        </div>
    </div>

   

    <div class="card mt-4 mb-4 border-light shadow">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span>Listar Contas</span>
            <a href="{{ route('conta.create') }}" class="btn btn-success btn-sm">Cadastrar</a>
        </div>

        @if (session('sucess'))
            <div class="alert alert-success" role="alert">
                <span style="color:#082;">
                    {{ session('sucess') }}
                </span>
            </div>
        @endif

        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Vencimento</th>
                            <th scope="col" class="text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($contas as $conta)
                            <tr>
                                <td>{{ $conta->id }}</td>
                                <td>{{ $conta->nome }}</td>
                                <td>{{ 'R$' . number_format($conta->valor, 2, ',', '.') }}</td>
                                <td>{{ \Carbon\Carbon::parse($conta->vencimento)->tz('America/Sao_Paulo')->format('d/m/Y') }}
                                </td>
                                <td class="d-flex justify-content-center">
                                    <a href="{{ route('conta.show', ['conta' => $conta->id]) }}"
                                        class="btn btn-info btn-sm me-1">Visualizar</a>
                                    <a href="{{ route('conta.edit', ['conta' => $conta->id]) }}"
                                        class="btn btn-warning btn-sm me-1">Editar</a>
                                    <form action="{{ route('conta.destroy', ['conta' => $conta->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm me-1" type="submit"
                                            onclick="return confirm('Você deseja apagar este registro?')">Apagar</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center" style="color: #f00;">Nenhuma conta encontrada</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            {{ $contas->onEachSide(5)->links() }}
        </div>
    </div>
@endsection
