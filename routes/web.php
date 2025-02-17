<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolController;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::resource('empresa', CompanyController::class)->names('company');
Route::get('empresa/user/{id}', [CompanyController::class, 'indexFiltrado'])->name('company.indexFiltrado');

Route::resource('usuario', UserController::class)->names('user');
Route::get('usuario/empresa/{user_id}/{company_id}', [CompanyController::class, 'addCompanyToUser'])->name('user.addCompanyToUser');

Route::resource('rol', RolController::class)->names('rol');
/*
Route::get(('about'), function () {
    return view('about');
});

Route::resource('usuarios', UserController::class);
Route::get('/usuarios', [UserController::class, 'index'])->name('users.index');

Route::get('biblioteca', function (){
    return view('biblioteca');
});*/
