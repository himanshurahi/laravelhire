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
Route::prefix('settings')->group(function() {
    Route::get('/', 'SettingsController@index');
});*/
Route::group(['middleware' => ['web','permission:settings.access'], 'prefix' => 'settings','as'=>'settings.', 'Modules\Platform\Settings\Http\Controllers'], function () {
    Route::get('/', ['as' => 'index', 'uses' => 'SettingsController@index']);

    Route::get('company_settings', ['as' => 'company_settings', 'uses' => 'CompanySettingsController@index']);
    Route::post('company_settings', ['as' => 'company_settings', 'uses' => 'CompanySettingsController@store']);

    Route::get('outgoing_server', ['as' => 'outgoing_server', 'uses' => 'OutgoingServerController@index']);
    Route::post('outgoing_server', ['as' => 'outgoing_server', 'uses' => 'OutgoingServerController@store']);
    Route::get('outgoing_server_refresh_cache', ['as' => 'outgoing_server_refresh_cache', 'uses' => 'OutgoingServerController@refreshSettingsCache']);
    Route::post('outgoing_server_test_email', ['as' => 'outgoing_server_test_email', 'uses' => 'OutgoingServerController@sendTestEmail']);

    Route::get('display', ['as' => 'display', 'uses' => 'DisplayController@index']);
    Route::post('display', ['as' => 'display', 'uses' => 'DisplayController@store']);



    Route::resource('language', 'LanguageController', []);

    Route::resource('currency', 'CurrencyController', []);

    Route::resource('tax', 'TaxController', []);

    Route::resource('dateformat', 'DateformatController', []);

    Route::resource('timeformat', 'TimeformatController', []);

    Route::resource('timezone', 'TimeZoneController', []);
});
