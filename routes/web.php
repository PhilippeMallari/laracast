<?php

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
    $name = request('name');
    $age = request(1);

    return view('test', [
    	'name' => $name,
    	'age' => $age
    ]);
});

// Route::get('test', function () {
// 	return view('test');
// });