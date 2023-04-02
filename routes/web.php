<?php

use App\Http\Controllers\ComingSoonController;
use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
//     return view('howsoon');
// });

Route::get('/', [ComingSoonController::class, "index"])->name("ComingSoon.howsoon");

Route::get('/howsoon', [ComingSoonController::class, "index"])->name("ComingSoon.howsoon");
Route::get('/about', [ComingSoonController::class, "index"])->name("ComingSoon.about");
Route::get('/contact', [ComingSoonController::class, "index"])->name("ComingSoon.contact");

Route::get('/jelle', function () {
    return view('Jelle');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
