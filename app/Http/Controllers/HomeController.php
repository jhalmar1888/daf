<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use NumerosEnLetras;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo 'Formato #1 ' . NumerosEnLetras::convertir(1988208.99) . '<br>';
        
        echo 'Formato #2 ' . NumerosEnLetras::convertir(1988208.99,'Bolivianos',false,'Centavos') . '<br>';
        
        echo 'Formato #3 ' . NumerosEnLetras::convertir(1988208.99,'Bolivianos',true) . '<br>';
    }
}
