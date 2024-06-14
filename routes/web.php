<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\PokemonController;
use App\Http\Controllers\Admin\PokemonController as AdminPokemonController;

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

Route::get('/', [HomepageController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


//Route::middleware(['auth','role:admin'])->group(function(){
//    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
//});

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::resource('pokemon', AdminPokemonController::class);
});

Route::get('/pokemon', [PokemonController::class, 'index'])->name('pokemon.index');
Route::get('/pokemon/{id}', [PokemonController::class, 'show'])->name('pokemon.show');