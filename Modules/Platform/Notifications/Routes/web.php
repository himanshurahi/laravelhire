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
/*
Route::prefix('notifications')->group(function() {
    Route::get('/', 'NotificationsController@index');
});*/

Route::group(['middleware' => 'web', 'prefix' => 'notifications', 'Modules\Platform\Notifications\Http\Controllers'], function () {

    Route::get('/', 'NotificationsController@index')->name('notifications.index');

    Route::get('/count-new', 'NotificationsController@countNewNotifications')->name('notifications.countNew');

    Route::post('/top-bar-notifications', 'NotificationsController@topBarNotifications')->name('notifications.topBar');

    Route::post('/mark-notification', 'NotificationsController@markAsRead')->name('notifications.mark');

    Route::post('/delete', 'NotificationsController@delete')->name('notifications.delete');

});
