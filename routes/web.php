<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/person/create', function () {
    return view('create-person');
})->name('person.create');

//Route::post('/person', [PersonController::class, 'store'])->name('person.store');


Route::get('/personas', [PersonController::class, 'index']);