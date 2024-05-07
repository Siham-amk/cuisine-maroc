<?php

use App\Http\Controllers\AcceuilController;
use App\Http\Controllers\CuisinierController;
use App\Models\Cuisinier;
use Illuminate\Support\Facades\Route;

Route::resource('touslescuisiniers',CuisinierController::class); 
Route::resource('Acceuil',AcceuilController::class); 


Route::get('/', function () {
    return view('Acceuil');
});
Route::get('/profil', function () {
    return view('profil.show1');
});
Route::get('/Ajouterprofil', function () {
    return view('profil.ajouterProfil');
});
Route::get('/Chercherchef', function () {
    return view('profil.search');
});
Route::get('/profil/images', function () {
    return view('image.index');
});
// Route::get('/touslescuisiniers', function () {
//     return view('profil.index');
// });