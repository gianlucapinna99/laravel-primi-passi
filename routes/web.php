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
    $data = [
        'title' => 'Hello World!'
    ];
    return view('welcome', $data);
});


Route::get('/page-2', function () {
    $data = [
        'title' => 'pagina 2'
    ];
    return view('page-2', $data);
});


Route::get('/page-3', function () {
    $data = [
        'title' => 'pagina 3'
    ];
    return view('page-3', $data);
});