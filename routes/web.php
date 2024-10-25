<?php

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


Route::get("/counting", function () {
    return view("counting");
})->name("counting");

Route::get("/numberRecognition", function () {
    return view("numberRecognition");
})->name("numberRecognition");

Route::get("/basicAddition", function () {
    return view("basicAddition");
})->name("basicAddition");

Route::get("/basicSubtraction", function () {
    return view("basicSubtraction");
})->name("basicSubtraction");

Route::get("/shapeRecognition", function () {
    return view("shapeRecognition");
})->name("shapeRecognition");
