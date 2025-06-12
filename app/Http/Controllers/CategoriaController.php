<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function __invoke(Request $request)
    {
        // Aquí puedes manejar la lógica para la categoría
        // Por ejemplo, podrías retornar una vista o procesar datos

        return view('Categoria'); // Asegúrate de tener esta vista creada
    }
}
