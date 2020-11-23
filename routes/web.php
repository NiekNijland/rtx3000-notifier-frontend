<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\IndexController@GetIndex')->name('index.get');
Route::post('/getupdates', 'App\Http\Controllers\IndexController@PostGetUpdates')->name('getupdates.post');

Route::get('/voorkeuren/{id}', 'App\Http\Controllers\PreferencesController@GetPreferences')->name('preferences.get');
Route::post('/voorkeuren/opslaan', 'App\Http\Controllers\PreferencesController@TogglePreferences')->name('preferences.post');
