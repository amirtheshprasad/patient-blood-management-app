<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\JointableController;

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

// Route::get('/', function () {
//     return view('welcome');
// });






Route::group(['middleware'=>'auth'], function () {
    Route::get('/createpatient', \App\Http\Livewire\CreatePatient::class)->name('patient');
    Route::get('/recordbp', \App\Http\Livewire\RecordBloodPressure::class)->name('bp');
    Route::get('/getpatientcsv', \App\Http\Livewire\GetPatientCsv::class)->name('csv');
  

    // Route::get('/dashboard', \App\Http\Livewire\Admin\Patient\PatientTable::class)->name('dashboard');
    Route::get('/logout', '\App\Http\Controllers\JointableController@logout')->name('logout');
    Route::get('/db', '\App\Http\Controllers\JointableController@index')->name('dashboard');
  
});


// Route::livewire('/', 'home')->name('home')->middleware('auth');
Route::group(['middleware'=>'guest'], function () {
    Route::get('/login', \App\Http\Livewire\Login::class)->name('login');
    Route::get('/register', \App\Http\Livewire\Register::class)->name('register');
    Route::get('/', \App\Http\Livewire\Home::class);
});


// Route::get('/dashboard', \App\Http\Livewire\Dashboard::class);