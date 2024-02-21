<?php

use Illuminate\Support\Facades\Route;
use Illuminate\http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function() {
    return view('welcome');
});
/*
Route::get('/hello', function(){
    return response('<h1>Hello World</h1>', 200)
    ->header('Content-Type', 'text/plain')
    ->header('foo', 'bar');
}); 
Route::get('/posts/{id}', function($id){
    // dd($id);
    // ddd($id);
    return response('post '. $id);
})->where('id', '[0-9]+');
Route::get('/search', function(Request $request){
    return $request->name . ' ' . $request->city;
});
*/