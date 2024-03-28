<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //define una ruta con una sola funcion, su tuvieramos mas funciones esto no funciona
    public function __invoke()
    {
        return view ('home.home');
    }
}