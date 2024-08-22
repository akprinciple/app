<?php

use App\Http\Controllers\akController;
use App\Http\Controllers\homepage;
use App\Http\Middleware\check;
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
Route::view('/home', 'home');
Route::post('/home', function () {
    return "<h1>Good</h1>";
})->middleware(check::class)->name('home');

Route::resource('test', akController::class)
->missing(function () {
    redirect('/');
})->names([
    'create' => 'test.add'
]);
Route::view('/home2', 'home2');
Route::get('/homepage', [homepage::class, 'about']);
Route::post('/homepage', [homepage::class, 'handler']);
Route::fallback(function () {
   return '<h1>Route not found!</h1>';
});