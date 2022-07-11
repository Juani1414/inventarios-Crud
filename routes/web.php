<?php

use App\Http\Controllers\AsignController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;

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

Route::get('/', [SessionController::class, 'index']) -> name('login.index');

Route::post('/', [SessionController::class, 'store']) -> name('login.store');

Route::get('/edit/{cliente}/edit', [ClientController::class, 'edit']) -> name('login.edit');

Route::put('/edit/{cliente}/edit', [ClientController::class, 'update']) -> name('login.update');

Route::get('/register', [SessionController::class, 'create']) -> name('login.create');

Route::post('/register', [SessionController::class, 'register']) -> name('login.register');


Route::get('/home', [HomeController::class, 'index']) -> name('login.create');

Route::post('/home', [ClientController::class, 'index']) -> name('client.create');

Route::get('/products', [HomeController::class, 'products']) -> name('product.create');

Route::post('/products', [ProductController::class, 'index']) -> name('product.store');

Route::get('/asign', [HomeController::class, 'asign']) -> name('asign.create');

Route::post('/asign', [AsignController::class, 'index']) -> name('asign.store');
