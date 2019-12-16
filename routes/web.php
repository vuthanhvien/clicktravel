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
Route::get('/home', 'HomeController@index');
Route::get('/visa', 'HomeController@visa');
Route::get('/ve-gia-re', 'HomeController@content');
Route::get('/ve-gia-re/{slug}', 'HomeController@content');
Route::get('/promotion', 'HomeController@promotion');
Route::get('/hotel', 'HomeController@hotel');
Route::get('/point', 'HomeController@get_point');
Route::get('/search_point', 'HomeController@search_point');

Route::get('/vemaybay', 'HomeController@vemaybay');
Route::get('/vemaybay2', 'HomeController@vemaybay2');
Route::get('/index.php', 'HomeController@vemaybay');
Route::post('/get_promotion', 'HomeController@get_promotion');

Route::get('/khuyenmai-email', 'HomeController@promotion_email');


Route::get('/ticket', 'TicketController@index');
Route::get('/ticket-nd', 'TicketController@ticket_nd');
Route::get('/ticket-month', 'TicketController@month');
Route::get('/khach-san', 'HomeController@index');
Route::get('/payment', 'PaymentController@index');

Route::post('/ticket/booking', 'BookingController@index');
Route::get('/ticket/booking', 'BookingController@index');
Route::get('/ticket/test', 'BookingController@test');

Route::post('/ticket/save', 'BookingController@save');
Route::get('/ticket/info/{id}', 'BookingController@verify');

Route::get('/agency', 'HomeController@agency');
Route::post('/agency', 'HomeController@agency_save');
Route::get('/about-us', 'HomeController@about');
Route::get('/contact-us', 'HomeController@contact');
Route::post('/contact-us', 'HomeController@save');
Route::get('/contact-us/{id}', 'HomeController@contact');
Route::post('/avatar', 'HomeController@postAvatar');

Route::get('/search','TicketController@search');

Route::middleware(['auth'])->group(function () {
	Route::get('/user', 'UserController@index');
	Route::get('/user/ticket', 'UserController@ticket');


});

Route::middleware(['auth', 'admin'])->group(function () {
	Route::get('/admin', 'AdminController@index');
	Route::get('/admin/user', 'AdminController@user');
	Route::get('/admin/user/new', 'AdminController@user_new');
	Route::post('/admin/user/new', 'AdminController@user_save');
	Route::post('/admin/user/save_fund', 'AdminController@save_fund');
	Route::post('/admin/user/save_note', 'AdminController@save_note');
	Route::post('/admin/user/save_password', 'AdminController@save_password');
	Route::get('/admin/user/{id}', 'AdminController@user_detail');

	Route::get('/admin/setting', 'AdminController@setting');
	Route::get('/admin/location', 'AdminController@location');
	Route::post('/admin/setting/save', 'AdminController@setting_save');
	Route::post('/admin/location/save', 'AdminController@location_save');

	Route::get('/admin/ticket', 'AdminController@ticket');
	Route::get('/admin/ticket/{id}', 'AdminController@ticket_detail');

	Route::get('/admin/content', 'AdminController@content');
	Route::post('/admin/content/save', 'AdminController@content_save');
	Route::get('/admin/content/new', 'AdminController@content_new');
	Route::get('/admin/content/{id}', 'AdminController@content_detail');


	Route::get('/admin/agency_register', 'AdminController@agency_register');
	Route::post('/admin/agency_register/save', 'AdminController@agency_save');
	Route::get('/admin/agency_register/{id}', 'AdminController@agency_detail');

	Route::get('/admin/contact', 'AdminController@contact');
	Route::post('/admin/contact/save', 'AdminController@contact_save');
	Route::get('/admin/contact/{id}', 'AdminController@contact_detail');

	Route::get('/admin/change_status', 'AdminController@change_status');

	Route::get('/admin/profile', 'AdminController@user_detail');
	Route::get('/admin/services_brand', 'AdminController@services_brand');

	Route::get('/admin/promotion', 'AdminController@promotion');
	Route::post('/admin/promotion_save', 'AdminController@promotion_save');
	Route::post('/admin/promotion_delete', 'AdminController@promotion_delete');


	Route::get('/admin/promotion_email_list', 'AdminController@promotion_email_list');
	Route::get('/admin/promotion_email_send', 'AdminController@promotion_email_send');
	Route::get('/admin/promotion_email_delete', 'AdminController@promotion_email_delete');


});

Route::get('/admin/{id}', 'HomeController@page_404');
Route::get('/{id}', 'HomeController@page_404');

