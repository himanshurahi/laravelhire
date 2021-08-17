<?php

Route::group(['middleware' => ['web','permission:developers.browse'],'prefix'=>'developers','as'=>'developers.', 'Modules\Developers\Http\Controllers'], function()
{
    Route::get('/',function(){
       return redirect()->route('developers.developers.index');
    });

    Route::group(['middleware' => ['web','permission:developers.settings']], function(){

        

    });

    Route::resource('developers', 'DevelopersController');
});
