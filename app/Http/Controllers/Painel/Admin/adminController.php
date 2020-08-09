<?php

namespace App\Http\Controllers\Painel\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\layout;

class adminController extends Controller
{
    public function  index()
    {
        try 
        {
            $this->authorize('admin');
            $layout = layout::find(1);
            return view('painel.index', compact('layout'));
        }catch (\Exception $e) 
        {
        flash('Não autorizado!')->error();
        return redirect()->back();

        }

    } 
}
