<?php

use App\Http\Controllers\UsersController;
use LionRoute\Route;

/**
 * ------------------------------------------------------------------------------
 * Web Routes
 * ------------------------------------------------------------------------------
 * Here is where you can register web routes for your application
 * ------------------------------------------------------------------------------
 **/

Route::get('/', fn() => info("Welcome to index"));

Route::prefix("api",function() {
    Route::prefix("users",function() {
        Route::post("create",[UsersController::class,"create"]);
    });

});