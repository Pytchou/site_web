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

/*
 * Route accueil
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', 'App\Http\Controllers\WelcomeController@index');

/*
 * Route de réglementation
 */

Route::get('/cgu','App\Http\Controllers\Reglementation\ReglementationController@index_cgu');
Route::get('/rgpd','App\Http\Controllers\Reglementation\ReglementationController@index_rgpd');
Route::get('/mentions-legales','App\Http\Controllers\Reglementation\ReglementationController@index_mentions_legales');

/*
 * Route Authentification
 */

Route::get('/register', function (){
    return view('auth.register');
});
Route::post('/register_validator', 'App\Http\Controllers\Auth\AuthController@register_validator');
Route::get('/register-insert-data', 'App\Http\Controllers\Auth\AuthController@register_insert_data')->name('register-insert-data');
