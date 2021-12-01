<?php

use App\Http\Controllers\AtividadeController;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\ContatosPrefeituraController;
use App\Http\Controllers\PrefeituraController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::resource('prefeitura', PrefeituraController::class,)->except(['edit']);   
    Route::resource('cidade', CidadeController::class,)->except(['edit']); 
    Route::resource('Atividades', AtividadeController::class,)->except(['edit']); 
    Route::resource('contatosPrefeituras', ContatosPrefeituraController::class,)->except(['edit']);   
});
