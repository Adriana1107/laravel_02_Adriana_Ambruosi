<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Chi-siamo', function () {
    $arrayBellocci = [
        ['name' => 'Ichigo', 'surname' => 'Kurosaki'],
        ['name' => 'Loid', 'surname' => 'Forger'],
    ];
    return view('chiSiamo', ['bellocci'=> $arrayBellocci]);
});

Route::get('/iscriviti', function () {
    return view('iscriviti');
});

