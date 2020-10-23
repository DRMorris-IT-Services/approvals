<?php

Route::group(['namespace' => 'duncanrmorris\approvals\Http\Controllers'], function()
{
    Route::group(['middleware' => ['web', 'auth']], function(){
        
        Route::get('approvals', 'ApprovalsController@index')->name('approvals');
        Route::put('approvals/new', 'ApprovalsController@store')->name('approvals.add');
        Route::get('approvals/edit/{id}', 'ApprovalsController@edit')->name('approvals.edit');
        Route::put('approvals/update/{id}', 'ApprovalsController@update')->name('approvals.update');
        Route::get('approvals/view/{id}', 'ApprovalsController@show')->name('approvals.view');
        Route::put('approvals/del/{id}', 'ApprovalsController@destroy')->name('approvals.del');
        Route::get('approvals/search/{search}','ApprovalsController@search')->name('approvals.search');

    ### CONTROLS ###
    Route::get('approvals/controls/{id}', 'ApprovalscontrolsController@index')->name('approvals.controls');
    Route::get('approvals/controls/view/{id}', 'ApprovalscontrolsController@show')->name('approvals.controls.view');
    Route::get('approvals/controls/setup/{id}', 'ApprovalscontrolsController@create')->name('approvals.controls.setup');
    Route::get('approvals/controls/edit/{id}', 'ApprovalscontrolsController@edit')->name('approvals.controls.edit');
    Route::put('approvals/controls/update/{id}', 'ApprovalscontrolsController@update')->name('approvals.controls.update');

    });
});