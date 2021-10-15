<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function api()
    {
        $response = Http::get('https://ipgeolocation.abstractapi.com/v1',[
            'api_key'=>'a8861141a39e4bc48f607bc9086c3914',
        ]);

        if ($response['city'] == 'Neuquén'){
            $response = Http::get('http://api.weatherstack.com/current',[
                'access_key'=>'3d51e64afbc14410776abd6c74a14d0e',
                'query'=> 'Neuquen',
            ]);
                $clima = $response->json();
              return view('welcome',compact('clima'));
        }else{
            echo('fuera del radio laboral'); 
        }
       

       
    }

}

