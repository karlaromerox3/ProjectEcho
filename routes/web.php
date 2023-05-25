<?php

use App\Http\Controllers\BelongingController;
use App\Http\Controllers\EfficacyController;
use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return view('welcome');
})->name('homepage');

Route::get('student/register', [StudentController::class, 'create'])->name('student.create');
Route::post('student/save', [StudentController::class, 'store'])->name('student.store');

Route::get('belonging/questions', [BelongingController::class, 'index'])->name('belonging.index');
Route::post('belonging/save', [BelongingController::class, 'store'])->name('belonging.store');

// TODO: Change Controllers for SE
Route::get('efficacy/questions', [EfficacyController::class, 'index'])->name('efficacy.index');
Route::post('efficacy/save', [EfficacyController::class, 'store'])->name('efficacy.store');
