<?php

use App\Http\Controllers\FuckController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
})->name('welcome');

Auth::routes(['verify' => true]);

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('verified');
Route::get('/logout_user', [HomeController::class, 'logout_user'])->name('logout_user');
Route::get('/testDesign', function () {

    $name = ['num1' => 1, 'num2' => 2, 'num3' => 3];


    return view('testdesign', compact('name'));
});

Route::get('/parameter/{id?}', [FuckController::class, 'IdParameter']);
