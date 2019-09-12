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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('account-type','AccountController@accountType')->name('account-type');

Route::get('join/startup', 'AccountController@createStartup')->name('startup-join');
Route::get('join/investor', 'AccountController@createInvestor')->name('investor-join');


                    // Routes for investors

Route::get('all/investors', 'InvestorController@index')->name('all-investors');
