<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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
// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/form', function () {
//     return view('form');
// });
// Route::post('/unicode', function () {
//     return 'POST method';
// });
// Route::put('/unicode', function () {
//     return 'PUT method';
// });
// Route::delete('/unicode', function () {
//     return 'DELETE method';
// });
// Route::patch('/unicode', function () {
//     return 'Patch method';
// });
// Route::match(['get','post'],'unicode', function () {
//     return $_SERVER['REQUEST_METHOD'];
// });
// Route::any('/unicode', function (Request $request) {
//     return $request->method();
// });
// Route::redirect('/','form',404);
// Route::view('/','form');
Route::prefix('admin')->group(function(){
    Route::get('/home', function () {
        return view('home');
    });
    Route::get('/form', function () {
        return view('form');
    });
    Route::prefix('products')->group(function(){
        Route::get('/', function () {
            return 'List product';
        });
        Route::get('/add', function () {
            return 'Add product';
        });
        Route::get('/edit', function () {
            return 'Edit product';
        });
        Route::get('/delete', function () {
            return 'Delete product';
        });
    });
});
