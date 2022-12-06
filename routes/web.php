<?php

use App\Http\Controllers\quizController;
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

Route::get('/', [quizController::class, 'index'])->name('index');

Route::post('/quiz-form', [quizController::class, 'quizJoin'])->name('quizUserSubmit');
Route::get('/quizBody', [quizController::class, 'quizBody'])->name('quizBody');
Route::post('/quiz-submit', [quizController::class, 'quizSubmit'])->name('quizDataSubmit');
Route::get('/thanks', [quizController::class, 'thanks'])->name('thanks');
Route::get('/logout', [quizController::class, 'logout'])->name('logout');
