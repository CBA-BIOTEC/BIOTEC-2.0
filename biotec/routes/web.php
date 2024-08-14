<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VocabularyController;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\ElementController;
use App\Http\Controllers\ConceptController;
use App\Http\Controllers\InteractionController;
use App\Http\Controllers\LinkController;

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

Route::get('/biotec', function () {
    return view('biotec');
});

Route::get('/games', function () {
    return view('games');
});

Route::resource('/elements', ElementController::class);

Route::resource('/processes', ProcessController::class);

Route::resource('/concepts',ConceptController::class);

Route::resource('/vocabularies',VocabularyController::class);

Route::resource('/interactions', InteractionController::class);

Route::resource('/links', LinkController::class);