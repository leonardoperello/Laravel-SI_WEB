<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function show($slug)
    {
        return view('cliente', [
            'cliente' => Cliente::where('telefono', '=', $slug)->first()
        ]);
    }
}
