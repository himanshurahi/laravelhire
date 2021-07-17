<?php

Route::group(['middleware' => ['web','permission:companies.browse'],'prefix'=>'companies','as'=>'companies.', 'namespace' => 'Modules\Companies\Http\Controllers'], function()
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
