<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashbord\adminIController;
use App\Http\Controllers\dashbord\adminContror;
use Illuminate\Routing\Route as RoutingRoute;

Route::get('/test', function () {
    return view('dashbord.layout.header');
});

Route::get('/admin',[adminIController::class,'index']);
Route::get('/admin',[adminIController::class,'show1']);
// Route::get('/admin',[adminIController::class,'show2']);
//
// Route::get('/chart',[adminIController::class,'show']);
Route::get('/admindoners',[adminIController::class,'show']);
Route::get('/adminneeded',[adminIController::class,'show0']);

Route::get('admindoners/{id}',[adminIController::class,'edit'])->name('editform');
Route::get('admindoner/{id}',[adminIController::class,'edit1'])->name('destroy');




Route::get('/widget',[adminIController::class,'']);
Route::get('/form',[adminIController::class,'']);
Route::get('/button',[adminIController::class,'']);
Route::get('/blank',[adminIController::class,'']);
Route::get('/typography',[adminIController::class,'']);
Route::get('/table',[adminIController::class,'']);





// Route::resource('/chart',[adminIController::class]);

// Route::resource('chart', adminIController::class);






Route::get('/form', function () {
    return view('dashbord.form');
});

Route::get('/element', function () {
    return view('dashbord.element');
});



Route::get('/button', function () {
    return view('dashbord.button');
});

