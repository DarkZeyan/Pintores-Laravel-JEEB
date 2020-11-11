<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PintoresController extends Controller
{   

    function login(){
        return view('pageLogin.formulario');
    }

    function validarLogin(Request $request){
        $user = $request->input('user');
        $pass = $request->input('password');
        $key = $request->input('key');

        if($user === 'zeyan' && $pass='cbtis122'){
            $url='principal';
        }
        else{
            $url='pageLogin.formulario';
        }
        return view($url,[
            'user'=>$request->input('user')
        ]);
    }
    function principal(){
        return view('principal',[
            'title'=>'Pintores',
            'headerTitulo'=>'Página Principal - Pintores',
            'nombre'=>'Jorge Eduardo Escobar Bugarini',
            'grupo' => '5°E'
        ]);
    }
    function davinci(){
        return view('davinci',[
            'title'=>'Leonardo Da Vinci',
            'headerTitulo'=>'Leonardo Da Vinci',
            'nombre'=>'Jorge Eduardo Escobar Bugarini',
            'grupo' => '5°E'
        ]);
    }
    function picasso(){
        return view('picasso',[
            'title'=>'Pablo Picasso',
            'headerTitulo'=>'Pablo Picasso',
            'nombre'=>'Jorge Eduardo Escobar Bugarini',
            'grupo' => '5°E'
        ]);
    }
    function vangogh(){
        return view('vangogh',[
            'title'=>'Vicent Van Gogh',
            'headerTitulo'=>'Vicent Van Gogh',
            'nombre'=>'Jorge Eduardo Escobar Bugarini',
            'grupo' => '5°E'
        ]);
    }
    function velazquez(){
        return view('velazquez',[
            'title'=>'Diego Velazquez',
            'headerTitulo'=>'Diego Velazquez',
            'nombre'=>'Jorge Eduardo Escobar Bugarini',
            'grupo' => '5°E'
        ]);
    }
}
