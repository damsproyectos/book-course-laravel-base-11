<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SegundoControlador extends Controller
{
    //Segundo controlador
    function index() {
        return view( 'contactsaasco', [ 'name' => 'Hector' ]);
    }
}
