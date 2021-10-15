<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orden_Produccion;
use App\Models\Cliente;
use App\Models\Rosca;

use GuzzleHttp\Client;
use Google\Cloud\Translate\V3\TranslationServiceClient;

class OrdenProduccionController extends Controller
{
    public function show()
    {
        return view('orden', [
            'orden' => Orden_Produccion::all(),
            'clientes'=> Cliente:: all(),
            'roscas'=> json_decode(Rosca::all(),true)
        ]);
    }


    public function store(Request $request)
    {
        $orden_produccion = new Orden_Produccion;

        $orden_produccion->fecha = $request->fecha;
        $orden_produccion->detalle = $request->detalle;
        $orden_produccion->rosca = $request->rosca;
        $orden_produccion->DescripcionTecnica = $request->DescripcionTecnica;
        $orden_produccion->medidas = $request->medidas;
        $orden_produccion->save();
 
        return response()->json(["result" => "ok"], 201);
    }

    public function destroy($ordenId)
    {
     $orden = orden_produccion::find($ordenId);
     $orden->delete();

     return response()->json(["result" => "ok"], 200);       
    }

    public function update(Request $request, $ordenId)
    {
        $orden = orden_produccion::find($ordenId);
       $orden->fecha = $request->fecha;
       $orden->detalle = $request->detalle;
      
       $orden->save();

       return response()->json(["result" => "ok"], 201);       
    }

  

}
