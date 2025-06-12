<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function __invoke(Request $request)
    {
        if(auth()->user()->name === 'test name'){
            return view('dashboard');
        }
        else{
        return view('Productos'); // Asegúrate de tener esta vista creada
        }
    }
}