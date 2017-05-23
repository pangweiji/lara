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
    return view('welcome');
});

/*================ Dashboard =================*/
Route::get(config('sysconf.adminRoute'), 'Admin\DashboardController@index');

/*================ Ebay =================*/
Route::get(config('sysconf.adminRoute') . '/ebaymsg_list', 'Admin\EbayMsgController@list');

/*================ Amazon =================*/
Route::get(config('sysconf.adminRoute') . '/amazonmsg_list', 'Admin\AmazonMsgController@list');
Route::get(config('sysconf.adminRoute') . '/amazoncate_list', 'Admin\AmazonCategoryController@list');
Route::get(config('sysconf.adminRoute') . '/amazoncate_add', 'Admin\AmazonCategoryController@add');

/*================ Wish =================*/
Route::get(config('sysconf.adminRoute') . '/wishmsg_list', 'Admin\WishMsgController@list');

/*================ Ali =================*/
Route::get(config('sysconf.adminRoute') . '/alimsg_list', 'Admin\AliMsgController@list');

/*================ Walmart =================*/
Route::get(config('sysconf.adminRoute') . '/walmartmsg_list', 'Admin\WalmartMsgController@list');
Route::get(config('sysconf.adminRoute') . '/walmartcate_list', 'Admin\WalmartMsgController@list');
Route::get(config('sysconf.adminRoute') . '/walmartcate_add', 'Admin\WalmartMsgController@add');
