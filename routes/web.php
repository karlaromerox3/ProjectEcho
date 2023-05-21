<?php

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
});
Route::get('student/register', [StudentController::class, 'create'])->name('student.create');
Route::get('efficacy/register', [EfficacyController::class, 'create'])->name('efficacy.create');

Route::post('student/save', [StudentController::class, 'store'])->name('student.store');
