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
}
