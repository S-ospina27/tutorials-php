<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CoursesController;
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
        Route::put("update",[UsersController::class,"update"]);
    });

     Route::prefix("courses",function() {
        Route::post("create",[CoursesController::class,"create"]);
        Route::put("update",[CoursesController::class,"update"]);

    });

    Route::prefix("booking",function() {
        Route::post("create",[BookingController::class,"create"]);
        Route::put("update",[BookingController::class,"update"]);

    });

});