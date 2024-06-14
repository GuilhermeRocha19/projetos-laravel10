<?php

namespace App\Http\Controllers;

use App\Models\Conta;
use Illuminate\Http\Request;

class ContaController extends Controller
{
    //Listar Contas
    public function index(){
        return view('contas.index');
    }

    //Detalhes da Conta
    public function create(){
        return view('contas.create');
    }

    //Carregar Formulário cadastrar novva conta
    public function store(Request $request){
        
        //Cadastrar no banco de dados na tabela CONTAS
        Conta::create($request->all());
        // Redirecionar o usuário, enviar a mensagem de sucesso
        return redirect()->route('conta.show')->with('sucess', 'Conta cadastrada com sucesso');
    }

    //Cadastrar no banco de dados nova conta
    public function show(){
        return view('contas.show');
    }

    //Carregar o formulário editar a conta
    public function edit(){
        return view('contas.edit');
    }

    //Editar no banco de dados a conta
    public function update(){
        return view('contas.update');
    }

    //Excluir a conta do banco de dados
    public function destroy(){
        dd("apagar");
    }

}
