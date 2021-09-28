<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

#leader pages

Route::get('/leader/login', function () {
    return view('leader.login');
});


Route::get('/register', function () {
    return view('register');
});

Route::get('/leader/projects', function () {
    return view('leader.projects');
});

Route::get('/leader/profile', function () {
    return view('leader.profile');
});

Route::get('/leader/create-project', function () {
    return view('leader.create-project');
});

Route::get('/leader/test', function () {
    return view('leader/test');
});

Route::get('/leader/project', function () {
    return view('leader/project');
});



#founder pages

Route::get('/founder/login', function () {
    return view('founder.login');
});


Route::get('/founder/test', function () {
    return view('founder.test');
});

Route::get('/founder/projects', function () {
    return view('founder.projects');
});