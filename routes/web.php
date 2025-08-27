<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/chi-siamo', function () {
$users = [
    ['name' => 'Iginio', 'surname' => 'Massari', 'role' => 'Pasticcere'],
    ['name' => 'Luigi', 'surname' => 'Biasetto', 'role' => 'Pasticcere']
];
    return view('chiSiamo', ['users'=> $users]);
})->name('chiSiamo');

Route::get('/chi-siamo/detail/{name}', function($name){
    $users = [
    ['name' => 'Iginio', 'surname' => 'Massari', 'role' => 'Pasticcere'],
    ['name' => 'Luigi', 'surname' => 'Biasetto', 'role' => 'Pasticcere']
    ];

 foreach ($users as $user) {
    if($name == $user['name']){
        return view('chi-siamo-detail', ['user'=>$user]);
    }
 }
})->name('chiSiamoDetail');

Route::get('/ricette', function () {
    $ricetta = [
        ['id' => '1', 'title' => 'Tiramisù', 'img' => '/tiramisu.jpg' ],
        ['id' => '2', 'title' => 'Pancake', 'img' => '/pancake.jpg' ]
    ];

    return view('ricette.ricette', ['ricette' => $ricetta] );
})->name('ricette');


Route::get('/ricetta/detail/{id}', function($id) {

    $ricette = [
        ['id' => '1', 'title' => 'Tiramisù', 'img' => '/tiramisu.jpg'],
        ['id' => '2', 'title' => 'Pancake', 'img' => '/pancake.jpg']
    ];

    foreach ($ricette as $ricetta) {
        if ($id == $ricetta['id']) {
            return view('ricette.ricettaDetail', ['ricetta' => $ricetta]);
        }
    }
   
})->name('ricettaDetail');