<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VaccineController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These`
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Alfin_home', [
        "title" => "Home"
    ]);
})->name('home');

// Route::get('/patient', function () {
//     return view('Alfin_patient', [
//         "title" => "patient"
//     ]);
// })->name('patient');

// Route::get('/vaccine', function () {
//     return view('vaccine.Alfin_vaccine', [
//         "title" => "vaccine"

//     ]);
// });

Route::resource('/vaccine', VaccineController::class);  
Route::get('/patient', PatientsController::class,'index');  

// Route::get('/patient', function () {
//     return view('Alfin_patient', [
//         "title" => "patient"
//     ]);
// });

// Route::get('/vaccine', [VaccineController::class, 'index']);