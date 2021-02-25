<?php

use Illuminate\Support\Facades\Route;

session_start();

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
})->name('welcome');


/*
 * Route de réglementation
 */

Route::get('/cgu','App\Http\Controllers\Reglementation\ReglementationController@index_cgu');
Route::get('/rgpd','App\Http\Controllers\Reglementation\ReglementationController@index_rgpd');
Route::get('/mentions-legales','App\Http\Controllers\Reglementation\ReglementationController@index_mentions_legales');

/*
 * Route Authentification Benevole
 */

Route::get('/benevole/register1', function (){
    return view('auth.volunteer.register');
});
Route::post('/benevole/register_form1', 'App\Http\Controllers\Auth\AuthController@form1_volunteer_validator');
Route::get('/benevole/register2', function (){
    return view('auth.volunteer.register2');
});

Route::post('/benevole/register_form2', 'App\Http\Controllers\Auth\AuthController@form2_volunteer_validator');
Route::post('/benevole/register_volunteer_insert_data', 'App\Http\Controllers\Auth\AuthController@register_volunteer_insert_data')->name('register_volunteer_insert_data');

Route::get("/benevole/login", 'App\Http\Controllers\Auth\AuthController@volunteer_login')->name('volunteer_login');
Route::post('/benevole/login_validator', 'App\Http\Controllers\Auth\AuthController@volunteer_login_validator');
Route::get('/benevole/login_check_sql', 'App\Http\Controllers\Auth\AuthController@volunteer_login_check')->name('login_check_sql');


Route::get('/benevole/dashboard', 'App\Http\Controllers\Auth\AuthController@voluteer_dashboard')->name('benevole_dashboard');

Route::get('/benevole/dashboard_dark', function (){
    return view('auth.volunteer.dashboard_dark');
});

/*
 * Route Authentification Partenaire
 */

Route::get('/partenaire/register1', function (){
    return view('auth.partner.register');
});
Route::post('/partenaire/register_form1', 'App\Http\Controllers\Auth\AuthController@form1_partner_validator');

Route::get('/partenaire/register2', function (){
    return view('auth.partner.register2');
});
Route::post('/partenaire/register_form2', 'App\Http\Controllers\Auth\AuthController@form2_partner_validator');

Route::post('/partenaire/register_partner_insert_data', 'App\Http\Controllers\Auth\AuthController@register_partner_insert_data')->name('register_partner_insert_data');
Route::get('/partenaire/confirm/{name_partner}/{token}', 'App\Http\Controllers\Auth\AuthController@register_partner_confirm_data');

/*
 * Clear Cache Route
 */

Route::get('/clean-all-cache', function (){
    \Artisan::call('route:clear');
    \Artisan::call('view:clear');
    \Artisan::call('config:clear');
});
