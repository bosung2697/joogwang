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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/******************************Admin_Controller******************************************/

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return redirect('admin/newsroom/');
    });
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

//    NewsRoom Controller
    Route::get('/newsroom/','Admin\NewsRoom\AdminNewsRoomController@index');
    Route::get('/newsroom/create', 'Admin\NewsRoom\NewsRoomController@create');
    Route::get('/newsroom/{id}/edit', 'Admin\NewsRoom\NewsRoomController@edit');
    Route::put('/newsroom/{id}/update', 'Admin\NewsRoom\NewsRoomController@update')->name('admin.newsroom.update');
    Route::delete('/newsroom/{id}', 'Admin\NewsRoom\NewsRoomController@delete')->name('admin.newsroom.delete');
    Route::post('/newsroomfileupload/', 'Admin\NewsRoom\NewsRoomController@newsroomfileupload')->name('admin.newsroom.store');
});
