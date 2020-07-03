<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

// Install
Route::prefix('install')->group(function () {
    Route::middleware('install')->group(function () {
        Route::get('/', 'InstallController@index')->name('install');
        Route::get('/requirements', 'InstallController@requirements')->name('install.requirements');
        Route::get('/permissions', 'InstallController@permissions')->name('install.permissions');
        Route::get('/database', 'InstallController@database')->name('install.database');
        Route::get('/account', 'InstallController@account')->name('install.account');

        Route::post('/database', 'InstallController@saveConfig');
        Route::post('/account', 'InstallController@saveDatabase');
    });

    Route::get('/complete', 'InstallController@complete')->name('install.complete');
});

Route::get('/', 'HomeController@welcome')->middleware('installed')->name('welcome');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::post('/profile', 'HomeController@update');

Route::post('/campaign', 'CampaignController@create')->name('campaign.create');

Route::get('/campaign/{uuid?}/editor', 'CampaignController@editor')->name('campaign.editor');
Route::get('/campaign/{uuid?}/responses', 'CampaignController@responses')->name('campaign.responses');
Route::get('/campaign/{uuid?}/integrations', 'CampaignController@integrations')->name('campaign.integrations');
Route::get('/campaign/{uuid?}/privacy', 'CampaignController@privacy')->name('campaign.privacy');
Route::get('/campaign/{uuid?}/data', 'CampaignController@data')->name('campaign.data');
Route::get('/campaign/{uuid?}/delete', 'CampaignController@delete')->name('campaign.delete');

Route::post('/campaign/{uuid?}/export', 'CampaignController@export')->name('campaign.export');
Route::post('/campaign/{uuid?}/privacy', 'CampaignController@changePrivacy');
Route::delete('/campaign/{uuid?}/delete', 'CampaignController@deleteCampaign');
Route::delete('/campaign/{uuid?}/responses/{id?}', 'CampaignController@deleteResponse')->name('campaign.responses.delete');

Route::get('/campaign/{uuid?}/editor/view', 'EditorController@index')->name('editor.index');
Route::post('/campaign/{uuid?}/editor/view', 'EditorController@update');

Route::get('/widget/{uuid?}', 'WidgetController@view')->name('widget.view');
Route::get('/widget/{uuid?}/script', 'WidgetController@script')->name('widget.script');
Route::post('/widget/{uuid?}/submit', 'WidgetController@submit')->name('widget.submit');