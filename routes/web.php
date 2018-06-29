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
    return redirect('/home');
});
Route::get('/home', 'HomeController@index')->name('home');

///----------------------------------------ABOUTUS-------------------------------------------///
Route::get('/intro', 'AboutUs\IntroController@index');
Route::get('/company_status', 'AboutUs\CompanyStatusController@index');
Route::get('/awards', 'AboutUs\AwardsController@index');
Route::get('/companyhistory','AboutUs\CompanyHistoryController@index');
Route::get('/tob', 'AboutUs\TOBController@index');

///----------------------------------------PR-------------------------------------------///
Route::get('/newsroom', 'PR\NewsRoomController@index');
Route::get('/newsroom_detailed', 'PR\NewsRoomController@show');
//Route::get('/newsroom/{id}', 'PR\NewsRoomController@show');

///----------------------------------------PRODUCT-------------------------------------------///
Route::get('/equipment', 'Product\EquipmentController@index');
Route::get('/equipment_all', 'Product\EquipmentController@show');
Route::get('/productprocess', 'Product\ProductProcessController@index');
Route::get('/product_intro', 'Product\ProductIntroController@index');
Route::get('/RandD', 'Product\RandDController@index');