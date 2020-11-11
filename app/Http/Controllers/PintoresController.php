<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PintoresController extends Controller
{   

    function login(){
        return view('pageLogin.formulario',[
            'title'=>'Login',
            'tituloHeader'=>'Página de Inicio de Sesión',
            'nombre'=>'Jorge Eduardo Escobar Bugarini',
            'grupo' => '5°E'
        ]);
    }

    function validarLogin(Request $request){
        $user = $request->input('user');
        $pass = $request->input('password');
        $key = $request->input('key');

        if($user === 'zeyan' && $pass==='cbtis122'){
            $url='principal';
            $title='Pintores';
            $tituloHeader='Página Principal - Pintores';
        }
        else{
            $url='pageLogin.formulario';
            $title='Login';
            $tituloHeader='Página de Inicio de Sesión';
        }
        return view($url,[
            'user'=>$request->input('user'),
            'title'=>$title,
            'tituloHeader'=>$tituloHeader,
            'nombre'=>'Jorge Eduardo Escobar Bugarini',
            'grupo' => '5°E'
        ]);
    }
    function principal(){
        return view('principal',[
            'title'=>'Pintores',
            'tituloHeader'=>'Página Principal - Pintores',
            'nombre'=>'Jorge Eduardo Escobar Bugarini',
            'grupo' => '5°E'
        ]);
    }
    function davinci(){
        return view('davinci',[
            'title'=>'Leonardo Da Vinci',
            'tituloHeader'=>'Leonardo Da Vinci',
            'nombre'=>'Jorge Eduardo Escobar Bugarini',
            'grupo' => '5°E'
        ]);
    }
    function picasso(){
        return view('picasso',[
            'title'=>'Pablo Picasso',
            'tituloHeader'=>'Pablo Picasso',
            'nombre'=>'Jorge Eduardo Escobar Bugarini',
            'grupo' => '5°E'
        ]);
    }
    function vangogh(){
        return view('vangogh',[
            'title'=>'Vicent Van Gogh',
            'tituloHeader'=>'Vicent Van Gogh',
            'nombre'=>'Jorge Eduardo Escobar Bugarini',
            'grupo' => '5°E'
        ]);
    }
    function velazquez(){
        return view('velazquez',[
            'title'=>'Diego Velazquez',
            'tituloHeader'=>'Diego Velazquez',
            'nombre'=>'Jorge Eduardo Escobar Bugarini',
            'grupo' => '5°E'
        ]);
    }
function datos(){
    return view('datos',[
        'title'=>'Datos del Alumno',
        'tituloHeader'=>'Datos del Alumno',
        'nombre'=>'Jorge Eduardo Escobar Bugarini',
        'grupo' => '5°E'
    ]);
    }
}
