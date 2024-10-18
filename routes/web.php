<?php

use App\Http\Controllers\contactsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/contact',[contactsController::class,'index']);
Route::post('/addContact',[contactsController::class,'addUsers']);
Route::delete('/delContact/{email}', [contactsController::class,'deletUsers']);


Route::get('/register', function () {
    return view('register');
});
