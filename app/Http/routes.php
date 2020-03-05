<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('test',function(){
//     return "heloooooo";
// });
//Route::view('/','test');
Route::get('/', function () {
    return view('test');
});
Route::get('home', function () {
    return "home";
});
Route::get('htmlassignment',function(){
    return view('as1');
});
Route::get('csssample',function(){
    return view('sample');
});