<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', 'HomeController@index');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('pages', function () {
     return view('pages');
 });

Route::get('/lien-he', function () {
    return view('layouts.contact');
});
Route::get('chi-tiet-dich-vu/{id}', ['as'=>'service.show_detail_service','uses'=>'WebsiteSvController@show_service_detail']);

Route::get('/dich-vu','WebsiteSvController@show_service');

Route::get('/san-pham-cua-chung-toi','ProductController@index');
Route::get('/thu-vien-so','PostController@index');

Route::get('/bo-nhan-dien-thuong-hieu','WebsiteSvController@show_brand');
Route::get('/truyen-thong-marketing','WebsiteSvController@show_content');
Route::get('/xay-dung-ung-dung-di-dong','WebsiteSvController@show_mobile');
Route::get('/xay-dung-va-phat-trien-website','WebsiteSvController@show_website');

//Route::get('customer', 'CustomerControler@index');
Route::post('/', ['as'=>'customer.store','uses'=>'CustomerController@store']);
//Route::get('/{slug}', ['as'=>'posts.show_detail','uses'=>'PostController@show']);
Route::get('thu-vien-so/{slug}', 'PostController@show')->name('posts.show_detail');
Route::get('/{service_id}/{slug}', ['as'=>'service.show_detail','uses'=>'WebsiteSvController@index']);
