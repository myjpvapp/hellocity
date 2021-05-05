<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('pages/home');
})->name('home');



Route::get('/about', function() {
    return view('pages/about');
})->name('about');
