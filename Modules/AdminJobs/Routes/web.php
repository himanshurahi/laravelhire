<?php

Route::group(['middleware' => ['web','permission:adminjobs.browse'],'prefix'=>'adminjobs','as'=>'adminjobs.', 'Modules\AdminJobs\Http\Controllers'], function()
{
    Route::get('/',function(){
       return redirect()->route('adminjobs.adminjobs.index');
    });

    Route::group(['middleware' => ['web','permission:adminjobs.settings']], function(){

        

    });

    Route::resource('adminjobs', 'AdminJobsController');
});
