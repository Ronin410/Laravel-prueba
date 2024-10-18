<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Prueba;

class PruebaController  extends Controller
{
    //
    public function prueba()
    {
        $prueba = new Prueba;
        $prueba->name = 'Mi prueba';
        $prueba->save();
        return $prueba->name;
    }

    public function pruebaVista()
    {
        //prueba();
        $this->prueba();
        return view('prueba');
    }
}
