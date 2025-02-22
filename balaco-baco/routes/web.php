<?php

use Illuminate\Support\Facades\Route;

Route::get('/pou', function () {
    return view('pou');
});

Route::get('/balacobaco', function () {
    return view('balacobaco');
});