<?php

namespace App\Http\Controllers\Painel\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\mensagem;
use App\Http\Requests\Requests\MesagemRequest;

class MensagemController extends Controller
{
    private $mensagem;
    public function __construct(mensagem $mensagem)
    {
        $this->mensagem = $mensagem;
    }
    public function index(){
        try 
        {
            $this->authorize('admin');
            $mensagens = $this->mensagem->paginate(10);
            return view('painel.mensagem.index', compact('mensagens'));
        }catch (\Exception $e) 
        {
        flash('Não autorizado!')->error();
        return redirect()->back();

        }
    }
    public function store(MesagemRequest $request)
    {
        try 
        {
            $dados = $request->all();
            $isset = $this->mensagem->create($dados);
            flash('enviado com sucesso!')->success();
            return redirect()->back();    
        }catch (\Exception $e) 
        {
        flash('erro!')->error();
        return redirect()->back();
        }
    }
    public function show($id)
    {
        $mensagem = $this->mensagem->find($id);
        $dados_json = [
            'mensagem' => $mensagem,
        ];
        return $dados_json;

    
    }
}
