<?php

use App\Http\Controllers\PlanetController;
use App\Models\Planet;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('planets', PlanetController::class);
