<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes(["verify"=>true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::livewire("/","homelive");
Route::livewire("aproduct","aproduct");
Route::livewire("/one/{id?}","oneproduct");
Route::livewire("/about","about");

Route::livewire("/note","note");

Route::livewire("/graph","graph");



Route::livewire("/admin","admin");


Route::livewire("/oneshop/{xid?}","oneshop");

Route::livewire("/cart/{collection?}","cart");