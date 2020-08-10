<?php

namespace App\Http\Controllers\Painel\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\layout;
use App\Http\Requests\Requests\LayoutRequest;
use Illuminate\Support\Facades\Storage;
use File;

class layoutController extends Controller
{
    private $layout;
    public function __construct(layout $layout )
    {
        $this->layout = $layout;
    }
     public function edit($id){
        try 
        {
            $this->authorize('admin');
            $layout = $this->layout->find($id);
            return view('painel.layout.edit', compact('layout'));
        }catch (\Exception $e) 
        {
        flash('Não autorizado!')->error();
        return redirect()->back();

        }
     }

     public function update(LayoutRequest $request, $id)
     {
        try 
        {
            $this->authorize('admin');
            $dados = $request->all();
            $layout = $this->layout->find($id);
            $pagar_image_anterior = File::delete($layout->background);
            $update =   $layout->update($dados);
            flash('atualizado com sucesso!')->success();
            return redirect()->back();     
        }catch (\Exception $e) 
        {
        flash('Não autorizado!')->error();
        return redirect()->back();
        }
     }
}
