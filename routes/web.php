<?php

use App\Http\Controllers\ImagenController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/api/persona', [ImagenController::class,'index']
);
