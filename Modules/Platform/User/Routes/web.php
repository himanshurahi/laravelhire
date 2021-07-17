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

// Route::prefix('user')->group(function() {
//     Route::get('/', 'UserController@index');
// });

Route::group(['middleware' => ['web','permission:settings.access'], 'prefix' => 'settings','as'=>'settings.', 'Modules\Platform\User\Http\Controllers'], function () {
    Route::resource('users', 'User\UserController', []);

    Route::get('/users/ghost-login/{identifier}', ['as' => 'users.login-as', 'uses' => 'User\UserGhostLoginController@login']);
    Route::post('/users/change-password/{identifier}', ['as' => 'users.change-password', 'uses' => 'User\UserChangePasswordController@changePassword']);
    Route::get('/users/activity/{identifier}', ['as' => 'users.activity', 'uses' => 'User\UserActivityController@activity']);


    Route::resource('roles', 'Roles\RolesController', []);

    Route::get('/roles/permissions/{id}', ['as' => 'roles.permissions', 'uses' => 'Roles\PermissionsController@setup']);
    Route::post('/roles/permissions/{id}', ['as' => 'roles.permissions-save', 'uses' => 'Roles\PermissionsController@save']);

    Route::resource('groups', 'GroupsController', []);

    Route::get('sharing_rules', ['as' => 'sharing_rules', 'uses' => 'SharingRulesController@index']);
});
