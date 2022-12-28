<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class menu extends Controller
{

    public function index(){
        return view('index');
    }

    public function buscar(){
        return view('buscar');
    }

    public function usuarios($nombre_usuario=null){
        $date = now();
        return view ('usuarios', ['nombreusuario'=>$nombre_usuario, 'fecha'=>$date]);

    }
}
