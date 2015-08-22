<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/f01', function()
{
	return View::make('f01');
});

Route::get('/f02', function()
{
	return View::make('f02');
});

Route::get('/f03', function()
{
	return View::make('f03');
});

Route::get('/f04', function()
{
	return View::make('f04');
});

Route::get('/f05', function()
{
	return View::make('f05');
});

Route::get('/f06', function()
{
	return View::make('f06');
});


// Admin Control Panel
Route::group(['prefix' => 'admincp'], function () {
    Route::get('b01', function ()    {
        return View::make('admincp.b01');
    });

	Route::get('b02', function()
	{
		return View::make('admincp.b02');
	});

	Route::get('b03', function()
	{
		return View::make('admincp.b03');
	});

	Route::get('b04', function()
	{
		return View::make('admincp.b04');
	});

	Route::get('b05', function()
	{
		return View::make('admincp.b05');
	});

	Route::get('b06', function()
	{
		return View::make('admincp.b06');
	});

	Route::get('b07', function()
	{
		return View::make('admincp.b07');
	});

	Route::get('b08', function()
	{
		return View::make('admincp.b08');
	});

	Route::get('b09', function()
	{
		return View::make('admincp.b09');
	});

	Route::resource('b10', 'LinksController');

	Route::get('b11', function()
	{
		return View::make('admincp.b11');
	});

	

	// Api
	Route::group(['prefix' => 'api'], function () {

		Route::get('b1001', function()
		{
			return View::make('admincp.b11');
		});

		// Route::resource('b10', 'LinksController');
	});
});

