<?php

use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuizController;
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

Route::get('/', [QuizController::class,'index']);
Route::resource('quizzes', QuizController::class);
Route::resource('quizzes.questions', QuestionController::class);
Route::get('quizzes/{quiz}/solve', [QuizController::class, 'solve'])->name('quizzes.solve');
Route::post('quizzes/{quiz}/submit', [QuizController::class,'submit'])->name('quizzes.submit');
