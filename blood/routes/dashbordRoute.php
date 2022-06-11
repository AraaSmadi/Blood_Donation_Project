<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashbord\adminIController;
use Illuminate\Routing\Route as RoutingRoute;

Route::get('/test', function () {
    return view('dashbord.layout.header');
});

Route::get('/admin',[adminIController::class,'index']);
Route::get('/admin',[adminIController::class,'show']);



Route::get('/form', function () {
    return view('dashbord.form');
});

Route::get('/element', function () {
    return view('dashbord.element');
});

Route::get('/chart', function () {
    return view('dashbord.chart');
});

Route::get('/button', function () {
    return view('dashbord.button');
});

