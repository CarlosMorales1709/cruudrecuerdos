<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorDiario;

class controladorVistas extends Controller
{
    public function showWelcome(){
        return view('welcome');
    }


    public function showHome(){
        return view('home');
    }

    public function showIngresar(){
        return view('registrar');
    }
    public function showRecuerdos(){
        return view('recuerdo');
    }

    public function procesarRecuerdo(validadorDiario $req){
        
        return redirect('REGISTRAR')->with('confirmacion','llego correcto');
        //return $req->all();
        //return $req->path();
        //return $req->url();
        //return $req->ip();

    }


}
