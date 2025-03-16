<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\inertia;

class verificarController extends Controller
{   
    public function verificar(Request $request){
        
        if( $request->numero > 0){
            $mensagem = "Esse número é positivo";
            $color = "green";
        }elseif($request->numero == 0){
            $mensagem = "";
            $color = "rgb(143, 142, 142)";
        }else{
            $mensagem = "Esse número é negativo";
            $color = "red";
        }

        
        
        return Inertia::render('Welcome',[
            'mensagem' => $mensagem,
            'color' => $color
        ]);
    }
}
