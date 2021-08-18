<?php

Route::group(['middleware' => ['web','permission:admincompanies.browse'],'prefix'=>'admincompanies','as'=>'admincompanies.', 'Modules\AdminCompanies\Http\Controllers'], function()
{
    Route::get('/',function(){
       return redirect()->route('admincompanies.admincompanies.index');
    });

    Route::group(['middleware' => ['web','permission:admincompanies.settings']], function(){

        

    });

    Route::resource('admincompanies', 'AdminCompaniesController');
});
