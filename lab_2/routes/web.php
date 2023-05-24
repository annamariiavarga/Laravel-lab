<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CVController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\VacancyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Varga/cv' , [CVController::class, 'show']
);

Route::resource('/candidates', CandidateController::class);

Route::resource('/vacancies', VacancyController::class);

