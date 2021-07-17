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
Route::prefix('menumanager')->group(function() {
    Route::get('/', 'MenuManagerController@index');
});*/
Route::group(['middleware' => ['web','permission:settings.access'], 'prefix' => 'settings/menu_manager','as'=>'settings.menu_manager.', 'Modules\Platform\MenuManager\Http\Controllers'], function () {
    Route::get('/', ['as'=>'index','uses'=>'MenuManagerController@index' ]);

    Route::get('/create_element', ['as'=>'create_element','uses'=>'MenuManagerController@createMenuElement' ]);

    Route::get('/delete-element/{id}', ['as'=>'delete','uses'=>'MenuManagerController@deleteElement' ]);

    Route::get('/get_menu_element/{id}', ['as'=>'get_menu_element','uses'=>'MenuManagerController@getMenuElement' ]);

    Route::post('/update_order', ['as'=>'update_order','uses'=>'MenuManagerController@updateOrder' ]);

    Route::post('/save_menu_element', ['as'=>'save_menu_element','uses'=>'MenuManagerController@saveElement' ]);
});
