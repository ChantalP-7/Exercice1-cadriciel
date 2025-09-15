<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Exercice1Controller;


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

Route::get('/', [Exercice1Controller::class, 'index']);

Route::get('/home', [Exercice1Controller::class, 'index']);
Route::get('/about', [Exercice1Controller::class, 'about']);
Route::get('/products', [Exercice1Controller::class, 'products']);
Route::get('/store', [Exercice1Controller::class, 'store']);
Route::post('/contact', [Exercice1Controller::class, 'contactForm']);
