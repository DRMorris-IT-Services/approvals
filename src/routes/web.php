<?php

Route::group(['namespace' => 'duncanrmorris\approvals\Http\Controllers'], function()
{
    Route::group(['middleware' => ['web', 'auth']], function(){
        
        Route::get('approvals', 'approvalsController@index')->name('approvals');
        Route::put('approvals/new', 'approvalsController@store')->name('approvals.add');
        Route::get('approvals/edit/{id}', 'approvalsController@edit')->name('approvals.edit');
        Route::put('approvals/update/{id}', 'approvalsController@update')->name('approvals.update');
        Route::get('approvals/view/{id}', 'approvalsController@show')->name('approvals.view');
        Route::put('approvals/del/{id}', 'approvalsController@destroy')->name('approvals.del');
        Route::get('approvals/search/{search}','approvalsController@search')->name('approvals.search');

    ### CONTROLS ###
    Route::get('approvals/controls/{id}', 'approvalscontrolsController@index')->name('approvals.controls');
    Route::get('approvals/controls/view/{id}', 'approvalscontrolsController@show')->name('approvals.controls.view');
    Route::get('approvals/controls/setup/{id}', 'approvalscontrolsController@create')->name('approvals.controls.setup');
    Route::get('approvals/controls/edit/{id}', 'approvalscontrolsController@edit')->name('approvals.controls.edit');
    Route::put('approvals/controls/update/{id}', 'approvalscontrolsController@update')->name('approvals.controls.update');

    });
});