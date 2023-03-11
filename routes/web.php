<?php

use App\Http\Controllers\EtudiantController;
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


// Route::get('/dashboard', function () {

//     return view('dashboard');

// });


Route::get('forum', [EtudiantController::class, 'index'])->name('forum.index');
Route::get('forum/{id}/show', [EtudiantController::class, 'show'])->name('etudiants.show');
Route::get('forum/create', [EtudiantController::class, 'create'])->name('etudiants.create');
Route::post('forum/store', [EtudiantController::class, 'store'])->name('etudiants.store');
Route::get('forum/{id}/edit', [EtudiantController::class, 'edit'])->name('etudiants.edit');
Route::put('forum/{id}', [EtudiantController::class, 'update'])->name('etudiants.update');
Route::get('forum/search/{query}', [EtudiantController::class, 'search'])->name('etudiants.search');
Route::delete('forum/{etudiant}', [EtudiantController::class, 'destroy'])->name('etudiant.delete');