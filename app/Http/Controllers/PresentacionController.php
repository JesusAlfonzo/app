<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PresentacionController extends Controller
{
    public function __invoke(Request $request)
    {
        if(auth()->user()->name === 'Jesus Alfonzo') {
            return redirect()->route('dashboard');
        }
        else{
        return view('Presentacion');

        }

    }
}
