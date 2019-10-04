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

/************************* Route Client ***********************************/

Route::get('/acceuil', 'client@accueilForm');
Route::get('/profil','client@profilUserForm' )->name('profil')->middleware('App\Http\Middleware\Auth');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/auth/redirect/{provider}', 'Auth\LoginController@redirect');
Route::get('/callback/{provider}', 'Auth\LoginController@callback');
Route::get('sendgmail58', 'SendGmailController@sendgmail58');
Route::get('deconnexion','Auth\LoginController@logout')->name('deconnexion');
Route::get('viewlogin','client@viewlogin')->name('viewlogin');
Route::get('veriftoken/{id}','client@verifcode')->name('veriftoken');
Route::get('modifierprofilform,{id}','client@modifierprofileform')->name('modifierprofileform')->middleware('App\Http\Middleware\Auth');
Route::post('modifierprofilaction','client@modifierprofilaction')->name('modifierprofilaction');

/************************* Route Services ***********************************/

Route::get('AjouterServicesForm','ServicesController@AjouterServicesForm')->name('AjouterServicesForm');
Route::post('AjouterServicesAction','ServicesController@AjouterServicesAction')->name('AjouterServicesAction');
Route::get('rechercheview','ServicesController@viewrecherche')->name('rechercheview')->middleware('App\Http\Middleware\Auth');;
Route::get('afficher','ServicesController@afficher')->name('afficher');
Route::get('/ser/{prix_min}/{prix_max}/{titre}/{dt}/{localisation}','ServicesController@afficher')->name('ser');
Route::get('/','ServicesController@index')->name('/');

/****linkedin*****/

Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('{provider}/callback', 'Auth\LoginController@handleProviderCallback');

/*****detailservice****/

Route::get('ShowDetailService,{id}', 'ServicesController@ShowDetailService')->name('ShowDetailService');
