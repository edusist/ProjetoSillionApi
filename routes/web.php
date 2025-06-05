<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UserController

};
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

Route::get('/usuarios', [UserController::class, 'getRandomUsers'])->name("usuarios");

// Route::get('/paginas-usuarios', [UserController::class, 'paginasUsuarios']);

Route::get('post',[UserController::class,'post']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
