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


Route::get('leader/register', function () {
    return view('leader.register');
});

Route::get('/leader/projects-catalog', function () {
    return view('leader.projects-catalog');
});

Route::get('/leader/your-projects', function () {
    return view('leader.your-projects');
});

Route::get('/leader/profile', function () {
    return view('leader.profile');
});

Route::get('/leader/test', function () {
    return view('leader.test');
});

Route::get('/leader/create-project', function () {
    return view('leader.create-project');
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