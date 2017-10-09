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
Route::get('/about', function () {
    return view('about-us');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['middleware' => 'auth'], function()
{
    Route::get('/profile/{slug}',[
    'uses' => 'ProfilesController@index',
    'as' => 'profile',
     ]);

     Route::get('/profile/edit/profile',[
    'uses' => 'ProfilesController@edit',
    'as' => 'profile.edit'
    ]);

    Route::post('/profile/update/profile',[
    'uses' => 'ProfilesController@update',
    'as' => 'profile.update'
    ]);

    Route::get('/admin', [
    'uses' => 'AdminController@index',
    'as' => 'admin.index'
    ]);
  // fetches the make request view
    Route::get('/announcements/make', [
    'uses' => 'AnnouncementController@index',
    'as' => 'client.index'
    ]);
// sends client request from form data to controller
    Route::post('/announcements/make', [
    'uses' => 'AnnouncementController@create',
    'as' => 'create.announcement'
    ]);
    // fetches the request  view
    Route::get('/announcements/view', [
    'uses' => 'AnnouncementController@announcements',
    'as' => 'client.view'
    ]);



});
