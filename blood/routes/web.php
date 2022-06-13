<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BloodDonerController;
use App\Http\Controllers\BloodDonerNeededController;
use App\Http\Controllers\BloodTypeController;
use App\Http\Controllers\logindoner;


Route::resource('doner', BloodDonerController::class);
Route::get('login',[BloodDonerController::class, 'login']);
Route::post('check',[BloodDonerController::class, 'check']);




Route::resource('patient', BloodDonerNeededController::class);



Route::resource('doner', BloodDonerController::class);
Route::resource('patient', BloodDonerNeededController::class);




Route::get('patient2', [BloodTypeController::class, 'show']);
Route::view('login','registration_patient.login');
Route::post('login', [BloodDonerNeededController::class, 'Login']);
// Route::get('/logout', function () {
//     if(session()->has('user')){
//         session()->pull('user');
//     }
//     return redirect('login');
// });

Route::view('reg2','registration_patient.register2');
Route::post('user', [BloodDonerNeededController::class, 'userLogin']);




Route::get('/', [BloodDonerController::class , 'alldoner']);

Route::get('/feature', function () {
    return view('feature');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/testimonial', function () {
    return view('testimonial');
});
Route::get('/courses', function () {
    return view('courses');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/appointment', function () {
    return view('appointment');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/404', function () {
    return view('404');
});
