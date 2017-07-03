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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/ticket', 'TicketController@index');
Route::get('/khach-san', 'HomeController@index');
Route::get('/payment', 'HomeController@index');

Route::get('/admin', 'AdminController@index');

// Route::get('/admin', ['middleware' => ['auth', 'admin'], function() {
//     return "this page requires that you be logged in and an Admin";
// }]);

// Route::middleware('auth:api')->get('/admin', function (Request $request) {
//     // return $request->user();
// });
