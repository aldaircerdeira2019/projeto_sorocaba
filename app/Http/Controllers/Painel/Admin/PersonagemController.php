<?php

namespace App\Http\Controllers\Painel\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\personagen;
use App\Http\Requests\Requests\PersonagemRequest;
use File;

class PersonagemController extends Controller
{
    private $personagem;
    public function __construct(personagen $personagem)
    {
        $this->personagem = $personagem;
    }
    
    public function index(){
        try 
        {
            $this->authorize('admin');
            $personagens = $this->personagem->paginate(10);
            return view('painel.personagen.index', compact('personagens'));
        }catch (\Exception $e) 
        {
        flash('Não autorizado!')->error();
        return redirect()->back();

        }
    }

    public function create(){
        try 
        {
            $this->authorize('admin');
            return view('painel.personagen.create');
        }catch (\Exception $e) 
        {
        flash('Não autorizado!')->error();
        return redirect()->back();

        }
    }
    public function store(PersonagemRequest $request)
    {
        try 
        {
            $this->authorize('admin');
            $dados = $request->all();
            $isset = $this->personagem->create($dados);
            flash('adcionado com sucesso!')->success();
            return redirect()->route('personagem.index');       
        }catch (\Exception $e) 
        {
        flash('Não autorizado!')->error();
        return redirect()->back();
        }
    }
    public function edit($id)
    {
        try 
        {
            $this->authorize('admin');
            $personagem = $this->personagem->find($id);
            return view('painel.personagen.edit', compact('personagem'));
        }catch (\Exception $e) 
        {
        flash('Não autorizado!')->error();
        return redirect()->back();

        }
    }
    public function update(PersonagemRequest $request , $id)
    {
        try 
        {
            $this->authorize('admin');
            $dados = $request->all();
            $personagem = $this->personagem->find($id);
            $pagar_image_anterior = File::delete($personagem->avatar);
            $update =   $personagem->update($dados);
            flash('atualizado com sucesso!')->success();
            return redirect()->back();     
        }catch (\Exception $e) 
        {
        flash('Não autorizado!')->error();
        return redirect()->back();
        }
    }
    public function show($id)
    {
        $personagem = $this->personagem->find($id);
        $dados_json = [
            'personagem' => $personagem,
        ];
        return $dados_json;

    
    }


}
