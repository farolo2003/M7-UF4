<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\LoginController;
use App\Http\Controllers\api\ProductController;
use App\Http\Controllers\api\ProveedorController;



Route::middleware('auth:sanctum')->group(function (){
    Route::resource('products',ProductController::class);
    Route::resource('proveedores',ProveedorController::class);
});

Route::post('login',[LoginController::class, "login"]);

