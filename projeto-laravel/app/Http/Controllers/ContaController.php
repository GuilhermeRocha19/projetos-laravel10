<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContaRequest;
use App\Models\Conta;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
        
        try{

            //Cadastrar no banco de dados na tabela CONTAS
            $conta = Conta::create([
                'nome' => $request->nome,
                'valor' => str_replace(',','.', str_replace('.','',$request->valor)),
                'vencimento' => $request->vencimento
            ]);
    
    
            // Redirecionar o usuário, enviar a mensagem de sucesso
            return redirect()->route('conta.show',['conta' => $conta->id])->with('sucess', 'Conta cadastrada com sucesso');
        }catch(Exception $e){
            return back()->withInput()->with('error','Conta não Cadastrada');
        }
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

        try{
        $conta->update([
            'nome' => $request->nome,
            'valor' => str_replace(',','.', str_replace('.','',$request->valor)),
            'vencimento' => $request->vencimento
        ]);
        //Salvar Log de Sucesso
        Log::info('Conta Alterada com Sucesso',['id' => $conta->id]);

        return redirect()->route('conta.show', ['conta' => $conta])->with('sucess', "Conta Alterada com sucesso");
         } catch(Exception $e){
            //Mensagem de erro
            Log::warning("Conta não editada", [$e->getMessage()]);
            return back()->withInput()->with('error','Conta não editada');
         }
        
    }

    //Excluir a conta do banco de dados
    public function destroy(Conta $conta){
        //Excluir do banco de dados
        $conta->delete();

        return redirect()->route('conta.index', ['conta' => $conta])->with('sucess', "Conta excluida com sucesso");
    }

}
