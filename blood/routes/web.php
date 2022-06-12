<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BloodDonerController;
use App\Http\Controllers\BloodDonerNeededController;
use App\Http\Controllers\BloodTypeController;
<<<<<<< HEAD
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
=======
use App\Http\Controllers\logindoner;

>>>>>>> 3515fbd6724cfeddf8e66ae1bd40a5cd39075221

Route::resource('doner', BloodDonerController::class);
Route::get('login',[BloodDonerController::class, 'login']);
Route::post('check',[BloodDonerController::class, 'check']);




Route::resource('patient', BloodDonerNeededController::class);

<<<<<<< HEAD
=======

>>>>>>> 3515fbd6724cfeddf8e66ae1bd40a5cd39075221

Route::resource('doner', BloodDonerController::class);
Route::resource('patient', BloodDonerNeededController::class);




Route::get('patient2', [BloodTypeController::class, 'show']);
<<<<<<< HEAD





=======
<<<<<<< HEAD
Route::view('login','registration_patient.login');
Route::post('login', [BloodDonerNeededController::class, 'Login']);
// Route::get('/logout', function () {
//     if(session()->has('user')){
//         session()->pull('user');
//     }
//     return redirect('login');
// });
=======
>>>>>>> 07168efd4694a6399724e18bc8361c17ce2e4e9c
Route::view('reg2','registration_patient.register2');
Route::post('user', [BloodDonerNeededController::class, 'userLogin']);


>>>>>>> 3515fbd6724cfeddf8e66ae1bd40a5cd39075221


Route::get('/', function () {
    return view('index');
});
Route::get('/', function () {
    return view('login');
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
