<?php



use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name("home");

Route::get('/shop', function () {
    return view('shop');
})->name("shop");
