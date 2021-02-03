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
/*Route::get('/form2', function (){
    return view('auth.register2');
});*/


Route::post('/form1', 'App\Http\Controllers\Auth\AuthController@form1_volunteer_validator');
Route::post('/form2', 'App\Http\Controllers\Auth\AuthController@form2_volunteer_validator');

Route::get('/register_volunteer_insert_data', 'App\Http\Controllers\Auth\AuthController@register_volunteer_insert_data')->name('register_volunteer_insert_data');

/*
 * Clear Cache Route
 */

Route::get('/clean-all-cache', function (){
    \Artisan::call('route:clear');
    \Artisan::call('view:clear');
    \Artisan::call('config:clear');
});