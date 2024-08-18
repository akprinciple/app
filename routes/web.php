<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::redirect('/here', '/welc');

Route::view('/', 'welcome', ['name', 'Akeem']);
Route::get('/user/{id}/level/{level}', function(string $id, string $level){
    return $id." ".$level;
});