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

Route::group(['middleware' => ['web','permission:settings.access'], 'prefix' => 'settings/announcement', 'Modules\Platform\Announcement\Http\Controllers'], function () {
    Route::get('/', ['as'=>'settings.announcement','uses'=>'AnnouncementController@index' ]);
    Route::post('/', ['as'=>'settings.announcement','uses'=>'AnnouncementController@saveAnnouncement' ]);
});
