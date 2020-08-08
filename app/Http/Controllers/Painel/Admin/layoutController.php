<?php

namespace App\Http\Controllers\Painel\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\layout;
use App\Http\Requests\Requests\LayoutRequest;

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
            $layout = $this->layout->find($id);
            $this->authorize('admin');
            return view('painel.layout.edit', compact('layout'));
        }catch (\Exception $e) 
        {
        flash('Não autorizado!')->error();
        return redirect()->back();

        }
     }

     public function update(LayoutRequest $request, $id)
     {
        $dados = $request->all();
        dd($dados);
        
     }
}
