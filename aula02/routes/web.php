<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users/{param}', function ($param) {
    return $param;
});

Route::prefix('usuarios')->group(function(){
    Route::get('/edit', function() {
        return 'edit';
    });
    Route::get('/delete', function() {
        return 'delete';
    });
});

Route::get('dados-de-usuarios/{users}', function(\App\Models\User $user){
 return $user;

});