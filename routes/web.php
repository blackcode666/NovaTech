<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/softwere', function () {
    return view('softwere');
});

Route::get('/hardwere', function () {
    return view('hardwere');
});

Route::get('/softprod', function () {
    return view('softprod');
});

Route::get('/hardprod', function () {
    return view('hardprod');
});