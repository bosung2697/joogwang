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
Route::get('/newsroom/{id}', 'PR\NewsRoomController@show');

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
    Route::get('/newsroom/create', 'Admin\NewsRoom\AdminNewsRoomController@create');
    Route::get('/newsroom/{id}/edit', 'Admin\NewsRoom\AdminNewsRoomController@edit');
    Route::put('/newsroom/{id}/update', 'Admin\NewsRoom\AdminNewsRoomController@update')->name('admin.newsroom.update');
    Route::delete('/newsroom/{id}', 'Admin\NewsRoom\AdminNewsRoomController@delete')->name('admin.newsroom.delete');
    Route::post('/newsroomfileupload/', 'Admin\NewsRoom\AdminNewsRoomController@newsroomfileupload')->name('admin.newsroom.store');
    //    Equipment Controller
    Route::get('/equipment/','Admin\Product\AdminEquipmentController@index');
    Route::get('/equipment/create', 'Admin\Product\AdminEquipmentController@create');
    Route::get('/equipment/{id}/edit', 'Admin\Product\AdminEquipmentController@edit');
    Route::put('/equipment/{id}/update', 'Admin\Product\AdminEquipmentController@update')->name('admin.equipment.update');
    Route::delete('/equipment/{id}', 'Admin\Product\AdminEquipmentController@delete')->name('admin.equipment.delete');
    Route::post('/equipmentfileupload/', 'Admin\Product\AdminEquipmentController@equipmentfileupload')->name('admin.equipment.store');
    //    ProductIntro Controller
    Route::get('/productintro/','Admin\Product\AdminProductIntroController@index');
    Route::get('/productintro/create', 'Admin\Product\AdminProductIntroController@create');
    Route::get('/productintro/{id}/edit', 'Admin\Product\AdminProductIntroController@edit');
    Route::put('/productintro/{id}/update', 'Admin\Product\AdminProductIntroController@update')->name('admin.productintro.update');
    Route::delete('/productintro/{id}', 'Admin\Product\AdminProductIntroController@delete')->name('admin.productintro.delete');
    Route::post('/productintrofileupload/', 'Admin\Product\AdminProductIntroController@productintrofileupload')->name('admin.productintro.store');
    //   Awards Controller
    Route::get('/awards/','Admin\AboutUs\AdminAwardsController@index');
    Route::get('/awards/create', 'Admin\AboutUs\AdminAwardsController@create');
    Route::get('/awards/{id}/edit', 'Admin\AboutUs\AdminAwardsController@edit');
    Route::put('/awards/{id}/update', 'Admin\AboutUs\AdminAwardsController@update')->name('admin.awards.update');
    Route::delete('/awards/{id}', 'Admin\AboutUs\AdminAwardsController@delete')->name('admin.awards.delete');
    Route::post('/awardsfileupload/', 'Admin\AboutUs\AdminAwardsController@awardsfileupload')->name('admin.awards.store');
});
