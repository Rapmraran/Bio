<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/homepage', function () {
    return view('homepage');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/experience', function () {
    return view('experience');
});
Route::get('/project', function () {
    return view('project');
});
Route::get('/s', function () {
    return view('tesaja');
});
