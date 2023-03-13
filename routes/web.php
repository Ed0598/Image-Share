<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImagesController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//images
route::get('/image', [ImagesController::class, 'index'])->name('images.index');
route::get('/image/create', [ImagesController::class, 'create'])->name('images.create');
route::post('/image/create', [ImagesController::class, 'store'])->name('images.store');
route::get('/image/{image}', [ImagesController::class, 'show'])->name('images.show');
route::get('/image/{image}/edit', [ImagesController::class, 'edit'])->name('images.edit');
route::patch('/image/{image}', [ImagesController::class, 'update'])->name('images.update');
route::delete('/image/{image}', [ImagesController::class, 'destroy'])->name('images.destroy');
require __DIR__.'/auth.php';
