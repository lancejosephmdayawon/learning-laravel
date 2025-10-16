<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    redirect()->route('hello');
});

Route::get('hello', function () {
    return view('hello');
})->name('hello');
