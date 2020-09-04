<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index');
Route::view('ingresar', 'login');

Route::resource('expert', 'ExpertsController');
Route::resource('employer', 'EmployersController');
Route::resource('login', 'LoginController');
