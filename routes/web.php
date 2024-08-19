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
Route::get('/post/{postId}/category/{catId?}', function (string $postId, ?string $catId = "None") {
    return 'Post id is'. $postId." Category given is ".$catId;
})->where('catId', '[A-Za-z]+');;

Route::get('/user/profile', function () {
    return "Gotten";
})->name('profile');

Route::fallback(function () {
   return 'Route not found!php';
});