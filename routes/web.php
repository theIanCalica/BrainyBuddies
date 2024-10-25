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
Route::get('/test/easy', [QuestionController::class, 'getEasyAdditionQuestions'])->name('test.easy');
Route::get('/test/medium', [TestController::class, 'startMedium'])->name('test.medium');
Route::get('/test/hard', [TestController::class, 'startHard'])->name('test.hard');


Route::get("/basic-subtraction", [QuestionController::class, "basicSubtraction"])->name("basicSubtraction");
Route::get("/number-recognition", [QuestionController::class, "numberRecognition"])->name("numberRecognition");
