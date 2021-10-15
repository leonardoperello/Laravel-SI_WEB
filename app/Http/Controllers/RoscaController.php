<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rosca;

class RoscaController extends Controller
{
    public function show($slug)
    {
        return view('rosca', [
            'rosca' => Rosca::where('medida', '=', $slug)->first()
        ]);
    }
}
