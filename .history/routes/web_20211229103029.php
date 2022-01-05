<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
Use App\Http\Controllers\UserController;

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
Route::get('/my', function () {
        return view('my');
})->name("my-page");

//Route::view('/my', "my")->name("my-page");
Route::view('contact', "contact");


// Route::get('/blog',[UserController::class, 'blogPost']);
// Route::get('/about',[UserController::class, 'about']);
