<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Volunteer\AuthController as BenevoleController;
use App\Http\Controllers\Auth\Partner\AuthController as PartnerController;
use App\Http\Controllers\Reglementation\ReglementationController as ReglementationController;

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

Route::get('/cgu',[ReglementationController::class, 'index_cgu']);
Route::get('/rgpd','App\Http\Controllers\Reglementation\ReglementationController@index_rgpd');
Route::get('/mentions-legales','App\Http\Controllers\Reglementation\ReglementationController@index_mentions_legales');

/*
 * Route Authentification Benevole
 */

Route::get('/benevole/register1',[BenevoleController::class, 'get_Register_Form1']);
Route::post('/benevole/register_form1', [BenevoleController::class, 'get_form1_volunteer_validator']);
Route::get('/benevole/register2', [BenevoleController::class, 'get_Register_Form2']);

Route::post('/benevole/register_form2', [BenevoleController::class, 'get_form2_volunteer_validator']);

Route::get("/benevole/login", [BenevoleController::class, 'get_volunteer_login'])->name('get_volunteer_login');
Route::post('/benevole/login_validator', [BenevoleController::class, 'volunteer_login_validator']);

Route::get('/benevole/dashboard', [BenevoleController::class, 'voluteer_dashboard']);



/*
 * Route Authentification Partenaire
 */

Route::get('/partenaire/register1', function (){
    return view('auth.partner.register.register');
});
Route::post('/partenaire/register_form1', [PartnerController::class, 'form1_partner_validator']);

Route::get('/partenaire/register2', function (){
    return view('auth.partner.register.register2');
});
Route::post('/partenaire/register_form2', [PartnerController::class, 'form2_partner_validator']);

Route::get('/partenaire/confirm2', function(){
    return view('auth.partner.confirm.confirm2');
});

Route::get('/partenaire/confirm/{name_partner}/{token}', [PartnerController::class, 'register_partner_confirm_data']);
Route::post('/partenaire/register_partner_confirm_form1', [PartnerController::class, 'register_partner_confirm_form1']);
Route::post('/partenaire/register_partner_confirm_notify', [PartnerController::class, 'register_partner_confirm_notify'])->name('register_partner_confirm_notify');

/*
 * Clear Cache Route
 */

Route::get('/clean-all-cache', function (){
    \Artisan::call('route:clear');
    \Artisan::call('view:clear');
    \Artisan::call('config:clear');
});
