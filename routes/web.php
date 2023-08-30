<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\topicsController;

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

Route::get('/user', [UserController::class, 'index']);

Route::get('/register', [UserController::class, 'index'])->name('register');
Route::post('/register', [UserController::class, 'store'])->name('register.store');






Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', [homeController::class, 'show']);
Route::get('/array', [homeController::class, 'array']);
Route::get('/news', [homeController::class, 'news']);
Route::get('/newsMore', [homeController::class, 'newsMore']);
Route::get('/contacts', [homeController::class, 'contacts']);
Route::get('/topics/new', [topicsController::class, 'create_topic']);
Route::post('/topics/create', [topicsController::class, 'create']);

Route::get('/page', [homeController::class, 'page']);
Route::get('/master', [homeController::class, 'master']);
Route::get('/vars', [homeController::class, 'vars']);

Route::get('/form', [homeController::class, 'get_form']);
Route::post('/form', [homeController::class, 'put_form']);


