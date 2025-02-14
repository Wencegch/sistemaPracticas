<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;

//Route::resource('disco', DiskController::class)->names('disk');

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::resource('empresa', CompanyController::class)->names('company');
Route::get('empresa/user/{id}', [CompanyController::class, 'indexFiltrado'])->name('company.indexFiltrado');
Route::resource('usuario', UserController::class)->names('user');
/*
Route::get(('about'), function () {
    return view('about');
});

Route::resource('usuarios', UserController::class);
Route::get('/usuarios', [UserController::class, 'index'])->name('users.index');

Route::get('biblioteca', function (){
    return view('biblioteca');
});*/
