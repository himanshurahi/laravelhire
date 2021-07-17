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
Route::prefix('account')->group(function() {
    Route::get('/', 'AccountController@index');
});*/
Route::group(['middleware' => 'web', 'prefix' => 'account', 'Modules\Platform\Account\Http\Controllers'], function () {

    Route::get('/', ['as'=>'account.index','uses'=> 'AccountController@preferences']);

    Route::get('ghost-logout', ['as'=>'account.ghost-logout','uses'=> 'GhostLogoutController@logout']);

    Route::get('activity-log', ['as'=>'account.activity-log','uses'=> 'AccountController@activityLog']);

    Route::post('ajax_update_account_settings', ['as'=>'account.ajax_update_account_settings','uses'=> 'AccountController@ajaxUpdateAccountSettings']);

    Route::post('update', ['as'=>'account.update','uses'=>'AccountController@updateAccount']);

    Route::post('change-password', ['as'=>'account.password','uses'=>'AccountController@changePassword']);

});
