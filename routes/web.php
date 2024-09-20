<?php

use App\Http\Controllers\PrimerControlador;
use App\Http\Controllers\SegundoControlador;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//CONTROLADORES
Route::get( 'contactsaasco', [PrimerControlador::class, 'index'] );
// Route::get( 'contactsaasco0', [SegundoControlador::class, 'index'] );





//Rutas y Vistas
Route::get('/contact', function () {
    // return to_route('contactsaasco');
    // return redirect()->route('contactsaasco');
    // return redirect('/contactsaasco', 303);
    $data = [ 'name' => 'andres' ];
    return view('contact', $data);
})->name('contact');

/* Route::get('/contactsaasco', function () {
    return view( 'contactsaasco', [ 'name' => 'Hector' ]);
})->name('contactsaasco');*/

Route::get('/clientes', function () {
    return view( 'clientes', [ 'name' => 'Hector' ]);
})->name('clientes');

Route::get('/producto', function () {
    return view( 'producto', [ 'name' => 'Hector' ]);
})->name('producto');





//INTRODUCCIÓN
// Route::get('/test', function(){
//     return "Welcome";
// });

// Route::get('/nosotros', function(){
//     return "Somos Saasco SAS, empresa desarrolladoradora <br/> de software";
// });

// Route::get('/prueba', function(){
//     return view('test');
// });

// // route::get('/crud', function(){
// //     return view('crud/index');
// // });

// route::get('/crud', function(){
//     $age = 33;
//     $data = [ 'name' => 'Andres', 'age' => $age ];

//     return view('crud/index', $data);
// });

// route::get('/crudy', function(){
//     $age = 33;
//     $data = [ 'name' => 'Andres', 'age' => $age ];

//     return view('crud/index', $data);
// })->name("home");
