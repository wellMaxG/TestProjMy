<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\homeController;
use App\Http\Controllers\topicsController;

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