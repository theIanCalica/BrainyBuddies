<?php

use App\Http\Controllers\QuestionController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name("home");

Route::get("/about", function () {
    return view("about");
})->name("about");

Route::get("/contact", function () {
    return view("contact");
})->name("contact");

Route::get("/test", function () {
    return view("test");
});


Route::get('/basic-addition', [QuestionController::class, 'basicAddition'])->name("basicadditions");
Route::get('/basic-addition/{difficulty}', [QuestionController::class, 'basicAdditionQuiz'])->name('basicAdditionTest');


Route::get("/basic-subtraction", [QuestionController::class, "basicSubtraction"])->name("basicSubtraction");
Route::get("/basic-subtraction/{difficulty}", [QuestionController::class, "basicSubtractionQuiz"])->name("basicSubtractionTest");

Route::get('/basic-multiplication', [QuestionController::class, 'basicMultiplication'])->name("basicMultiplication");
Route::get('/basic-multiplication/{difficulty}', [QuestionController::class, 'basicMultiplicationQuiz'])->name('basicMultiplicationTest');

Route::get('/basic-division', [QuestionController::class, 'basicDivision'])->name("basicDivision");
Route::get('/basic-division/{difficulty}', [QuestionController::class, 'basicDivisionQuiz'])->name('basicDivisionTest');
