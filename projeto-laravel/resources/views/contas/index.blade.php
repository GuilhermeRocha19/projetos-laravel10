@extends('layouts/admin')
@section('content')
    <div class="card mt-4 mb-4 border-light shadow">
        <div class="card-header d-flex justify-content-between">
            <span>Listar Contas</span>
            <span>
                <a href="{{ route('conta.create') }}" class="btn btn-success btn-sm">Cadastrar</a>
            </span>
        </div>


        @if (session('sucess'))
            <div class="alert alert-success" role="alert">
                <span style="color:#082;">
                    {{ session('sucess') }}
                </span>
            </div>
        @endif

        <div class="card-body">
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
                            <td class="d-md-flex justify-content-center">
                                <a href="{{ route('conta.show', ['conta' => $conta->id]) }}" class="btn btn-info btn-sm me-1">Visualizar</a>

                                <a href="{{ route('conta.edit', ['conta' => $conta->id]) }}" class="btn btn-warning btn-sm me-1">Editar</a>

                                <form action="{{ route('conta.destroy', ['conta' => $conta->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm me-1" type="submit"
                                        onclick="return confirm('Você deseja apagar este registro?')">Apagar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <span style="color: #f00;"> Nenhuma conta encontrada</span>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
