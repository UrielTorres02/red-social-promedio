<?php

use App\Http\Controllers\ImagenController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;

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

// Ruta para página principal
Route::get('/', function () {
    return view('principal');
});

// Crear ruta para alumnos
Route::view('/alumnos', 'alumnos');

// Crear ruta para cv
Route::view('/cv', 'cv');

// Ruta para registro de usuarios
Route::get('/register', [RegisterController::class, 'index'])->name("register");
// Ruta para enviar datos al servidor
Route::post('/register', [RegisterController::class, 'store']);

//Ruta para vista del muro de perfil de usuario autentucado
Route::get('/muro',[PostController::class,'index'])->name('post.index');

//Ruta para el login
Route::get('/login',[LoginController::class,'index'])->name('login');
//Ruta para enviar datos al servidor
Route::post('/login',[LoginController::class,'store']);

//Ruta para el logout
Route::post('/logout',[LogoutController::class,'store'])->name('logout');

//Ruta para el formulario de post de publicación
Route::get('/post/create',[PostController::class, 'create'])->name('post.create');

//Ruta para cargar imagenes
Route::post('/imagenes', [ImagenController::class, 'store'])->name('imagnees.store');

//Ruta para almacenar las imagenes
Route::post('/posts', [PostController::class, 'store'])->name('post.store');

