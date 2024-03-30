<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;

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

Route::get('/studentRegister', [studentController::class, "studentRegister"])->name("student.studentRegister");
Route::post('/studentRegister', [studentController::class, "store"])->name("student.store");

Route::get('/studentView', [studentController::class, "studentView"])->name("student.studentView");

Route::get('/{student}/studentModify', [studentController::class, "studentModify"])->name("student.studentModify");
Route::put('/{student}/studentUpdate', [studentController::class, "studentUpdate"])->name("student.studentUpdate");

Route::delete('/{student}/studentDelete', [studentController::class, "studentDelete"])->name("student.studentDelete");




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




require __DIR__.'/auth.php';
