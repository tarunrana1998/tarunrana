<?php

use Illuminate\Support\Facades\Route;

// Route::domain('{account}.tarunrana.com')->group(function () {
//     Route::get('/', function (string $account) {
//         return view('test');
//     });
//     // return "Hello World";
// });


Route::get('/', function () {
    return view('welcome');
});

Route::get('/test1', function () {
    return view('test1');
});
