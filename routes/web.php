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
Route::get('/messagerie', 'HomeController@index')->name('home');
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
Route::get('rechercheview','ServicesController@viewrecherche')->name('rechercheview')->middleware('App\Http\Middleware\Auth');
Route::get('afficher','ServicesController@afficher')->name('afficher');
Route::get('/ser/{prix_min}/{prix_max}/{titre}/{dt}/{localisation}','ServicesController@filtrationServices')->name('ser');
Route::get('Sousservices/{id}','ServicesController@Sousservices')->name('Sousservices');
Route::get('/','ServicesController@index')->name('/');
Route::get('ServiceUser,{id}','ServicesController@ServiceUser')->name('ServiceUser');
Route::get('EditServicesForm,{id}', 'ServicesController@EditServicesForm')->name('EditServicesForm');
Route::post('EditServicesAction', 'ServicesController@EditServicesAction')->name('EditServicesAction');
Route::get('DeleteServicesAction/{id}','ServicesController@DeleteServicesAction')->name('DeleteServicesAction');


/****linkedin*****/

Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('{provider}/callback', 'Auth\LoginController@handleProviderCallback');

/*****detailservice****/

Route::get('ShowDetailService,{id}', 'ServicesController@ShowDetailService')->name('ShowDetailService');
Route::get('Detailfreelancer,{id}', 'ServicesController@Detailfreelancer')->name('Detailfreelancer');
Route::get('facebook', function(){
    return view('facebook');
});

/*****chat laravel****/

Route::get('/message/{id}', 'HomeController@getMessage')->name('message');
Route::post('message', 'HomeController@sendMessage');


/************* Commentaires *******/
Route::post('AjoutCommentaire/{services}','CommentController@AjoutCommentaire')->name('AjoutCommentaire');
Route::post('RepondreCommentaire/{comment}','CommentController@RepondreCommentaire')->name('RepondreCommentaire');
Route::get('showFromNotification/{service}/{notification}', 'CommentController@showFromNotification')->name('showFromNotification');


