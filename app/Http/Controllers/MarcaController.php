<?php

namespace App\Http\Controllers;
use App\Marca;
use App\Http\Resources\MarcaResource;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function index()
    {
      return MarcaResource::collection(Marca::with('modelos')->paginate(25));
    }

    public function store(Request $request)
    {
        $Marca = Marca::firstOrCreate([
        'nome' => $request->input('nome'),
        'descricao' => $request->input('descricao'),
      ]);

      return new MarcaResource($Marca);
    }

    public function show(Marca $Marca)
    {
      return new MarcaResource($Marca);
    }

    public function update(Request $request, Marca $Marca)
    {
      // check if currently authenticated user is the owner of the Marca
      if ($Marca->id == null) {
        return response()->json(['error' => 'You can only edit your own Marcas.'], 403);
      }

      $Marca->update($request->only(['nome', 'descricao']));

      return new MarcaResource($Marca);
    }

    public function destroy(Marca $Marca)
    {
      $Marca->delete();

      return response()->json(null, 204);
    }
}
