<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cidadeControler extends Controller
{

    public function getListar(){

        $cidades = Cidades::all();
        return view("cidade.listar", compact("cidades"));
    }
}
