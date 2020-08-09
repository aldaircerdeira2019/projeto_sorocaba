<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\layout;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $this->middleware('auth');
        return view('home');
    }

    public function welcome()
    {
        $layout = layout::find(1);
        return view('welcome', compact('layout'));
    }
}
