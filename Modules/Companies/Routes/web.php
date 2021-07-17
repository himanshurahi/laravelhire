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
Route::prefix('dashboard')->group(function() {
    Route::get('/', 'DashboardController@index');
});*/
Route::group(['middleware' => ['web','permission:companies.browse'],'prefix'=>'companies','as'=>'companies.', 'Modules\Companies\Http\Controllers'], function()
{
    Route::get('/',function(){
       return redirect()->route('companies.companies.index');
    });

    Route::group(['middleware' => ['web','permission:companies.settings']], function(){

        Route::resource('companytype','Settings\CompanyTypeController');
Route::resource('companyindustry','Settings\CompanyIndustryController');
Route::resource('companyrating','Settings\CompanyRatingController');


    });

    Route::resource('companies', 'CompaniesController');
});
