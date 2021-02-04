<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marca;
use App\Modelo;
use App\Http\Resources\ModeloResource;

class ModeloController extends Controller
{
    public function store(Request $request, marca $marca)
    {
      $modelo = Modelo::firstOrCreate(
        [
          'marca_id' =>$request->input('marca_id'),
          'nome'=>$request->nome,
          'cor'=>$request->cor,
        ]
       
      );

      return new ModeloResource($modelo);
    }
}
