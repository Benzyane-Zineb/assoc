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

Auth::routes();

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth:admin'], function(){

    Route::get('/', 'DashboardController@index')->name('admin.dashboard');
    Route::get('members', 'DashboardController@getMembers')->name('admin.members');
    Route::get('addMembers', 'MemberController@addMember')->name('admin.add.member');
    Route::get('logout', 'LoginController@logout')->name('admin.logout');
    Route::post('addMembers', 'MemberController@insertMember')->name('admin.insert.member');


});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'guest:admin'], function(){

    Route::get('login', 'LoginController@getLogin')->name('get.admin.login');
    Route::post('login', 'LoginController@login')->name('admin.login');

});
