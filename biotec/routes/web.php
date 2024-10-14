<?php

use Illuminate\Support\Facades\Route; # Importacion de la clase Route
use App\Http\Controllers\VocabularyController; # Importacion de controlador para los vocabularios
use App\Http\Controllers\ProcessController; # Importacion de controlador para los procesos
use App\Http\Controllers\ElementController; # Importacion de controlador para los elementos
use App\Http\Controllers\ConceptController; # Importacion de controlador para los conceptos
use App\Http\Controllers\InteractionController; # Importacion de controlador para las interacciones
use App\Http\Controllers\LinkController; # Importacion de controlador para los links
use App\Http\Controllers\LoginController; # Importacion de controlador para el login
use App\Http\Controllers\Auth\AuthenticatedSessionController; # Importacion de controlador para la sesion autenticada
use App\Http\Controllers\BiotecController; # Importacion de controlador para biotec
use App\Http\Controllers\ProfileController; # Importacion de controlador para el perfil
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('login');
Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// Ruta protegida, accesible solo si se ha iniciado sesión
Route::middleware('auth')->group(function () {
     // Rutas protegidas para usuarios autenticados

    Route::get('/games', function () {
        return view('games');
    });

    Route::resource('/elements', ElementController::class);
    Route::resource('/processes', ProcessController::class);
    Route::resource('/concepts',ConceptController::class);    
    Route::resource('/vocabularies',VocabularyController::class);    
    Route::resource('/interactions', InteractionController::class);
    Route::resource('/links', LinkController::class);

    // Ruta protegida que utiliza el controlador BiotecController
    Route::get('/profile', function () {
        return view('profile'); // Aquí 'profile' hace referencia a 'resources/views/profile.blade.php'
    });

    // Ruta protegida que utiliza el controlador BiotecController
    Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'show'])->name('profile');
});
// Ruta protegida que utiliza el controlador BiotecController
Route::get('/biotec', [BiotecController::class, 'index']);