<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PageController::class, 'dashboard']);
Route::get('/login', [PageController::class, 'login']);
Route::get('/book', [PageController::class, 'book']);
Route::get('/add-book', [PageController::class, 'Addbook']);
Route::post('/add-bookk', [BookController::class, 'Addbo0ok']);
Route::get('/user', [PageController::class, 'user']);
Route::get('/category', [PageController::class, 'category']);
Route::get('/register', [PageController::class, 'register']);
Route::get('/dashboard', [PageController::class, 'dashboardUser']);
Route::get('/dashboardAdmin', [PageController::class, 'dashboardAdmin']);
Route::post('/regisAccount', [BookController::class, 'regisAccount']);
Route::post('/loginAuth', [BookController::class, 'Auth']);