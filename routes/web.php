<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::livewire("/","homelive");
Route::livewire("aproduct","aproduct");
Route::livewire("/one/{id?}","oneproduct");
Route::livewire("/about","about");