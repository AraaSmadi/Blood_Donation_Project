<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BloodDonerController;
use App\Http\Controllers\BloodDonerNeededController;
use App\Http\Controllers\BloodTypeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\logindoner;



/**********************  doner routs ************************ */

Route::resource('doner', BloodDonerController::class);
Route::get('donerlogin',[BloodDonerController::class, 'login']);
Route::get('doneredit',[BloodDonerController::class, 'editprofile']);
Route::post('check',[BloodDonerController::class, 'check']);

/**********************  doner routs ************************ */



Route::resource('patient', BloodDonerNeededController::class);


Route::resource('doner', BloodDonerController::class);
Route::resource('patient', BloodDonerNeededController::class);




Route::get('patient2', [BloodTypeController::class, 'show']);








//Route::view('login','registration_patient.login');
Route::post('login', [BloodDonerNeededController::class, 'Login']);
// Route::get('/logout', function () {
//     if(session()->has('user')){
//         session()->pull('user');
//     }
//     return redirect('login');
// });
Route::view('reg2','registration_patient.register2');
Route::post('user', [BloodDonerNeededController::class, 'userLogin']);


Route::get('/', function () {
    return view('index');
});
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
// Route::get('/contact', function () {
//     return view('contact');
// });

Route::get('/appointment', function () {
    return view('appointment');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/404', function () {
    return view('404');
});


//*************** contact ********************** */
Route::get('/contact',[ContactController::class,'create']);
Route::post('/contact',[ContactController::class,'store'])->name('add-store');
//*************** contact ********************** */

