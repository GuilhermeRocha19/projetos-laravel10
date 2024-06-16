<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContaRequest;
use App\Models\Conta;
use Illuminate\Http\Request;

class ContaController extends Controller
{
    //Listar Contas
    public function index(){
        $contas = Conta::orderByDesc('created_at')->get();
        
        //Carregar a VIEW
        return view('contas.index',['contas' => $contas]); 
    }

    //Detalhes da Conta
    public function create(){
        return view('contas.create');
    }

    //Carregar Formulário cadastrar novva conta
    public function store(ContaRequest $request){
        //Validar formulário
        $request->validated(); 
        
        //Cadastrar no banco de dados na tabela CONTAS
        $conta = Conta::create($request->all());
        // Redirecionar o usuário, enviar a mensagem de sucesso
        return redirect()->route('conta.show',['conta' => $conta->id])->with('sucess', 'Conta cadastrada com sucesso');
    }

    //Cadastrar no banco de dados nova conta
    public function show(Conta $conta){
        //Carregar a VIEW
        return view('contas.show',['conta' => $conta]);
    }

    //Carregar o formulário editar a conta
    public function edit(Conta $conta){
        return view('contas.edit', ['conta' => $conta]);
    }

    //Editar no banco de dados a conta
    public function update(ContaRequest $request, Conta $conta){
        //Validar o form
        $request->validated();

        $conta->update([
            'nome' => $request->nome,
            'valor' => $request->valor,
            'vencimento' => $request->vencimento
        ]);

        return redirect()->route('conta.show', ['conta' => $conta])->with('sucess', "Conta Alterada com sucesso");
        
    }

    //Excluir a conta do banco de dados
    public function destroy(){
        dd("apagar");
    }

}
