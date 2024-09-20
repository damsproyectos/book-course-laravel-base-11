<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerControlador extends Controller
{
    //primer controlador
    function index() {
        $posts = [ 'post1', 'post2' ]; //Base datos $posts
        return view( 'contactsaasco', compact('posts'));

        // return view( 'contactsaasco', [ 'posts' => $posts ]);
        // return view( 'contactsaasco', [ 'name' => 'Hector' ]);
    }
}
