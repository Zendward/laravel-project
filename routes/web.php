<?php

use Illuminate\Support\Facades\Route;

Route::get('/latihan', function () {
    return view('produk.index');
});