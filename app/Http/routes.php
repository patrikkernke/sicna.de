<?php

/*----------  API-routes  ----------*/
Route::group(['middleware' => 'auth'], function() {
    
    Route::put('api/user/password/{id}', 'UserController@changePassword');
    Route::delete('api/user/delete/{id}', 'UserController@destroy');
    Route::post('api/user/create', 'UserController@store');
    Route::get('api/users/all', 'UserController@getAllUsers');

});

/*----------  Backend-routes  ----------*/
Route::group(['middleware' => 'auth'], function() {
    
    Route::get('nutzer', [
        'as'   => 'basecamp.users.index',
        'uses' => 'UserController@index'
    ]);

    Route::get('basecamp', [
        'as'   => 'basecamp',
        'uses' => 'PageController@basecamp'
    ]);

});

/*----------  Authentication  ----------*/

Route::get('logout', [
    'as' => 'auth.logout',
    'uses' => 'Auth\AuthController@getLogout'
]);

Route::get('login', [
    'as' => 'auth.getLogin',
    'uses' => 'Auth\AuthController@getLogin'
]);

Route::post('login', [
    'as' => 'auth.postLogin',
    'uses' => 'Auth\AuthController@postLogin'
]);

/*----------  Product-pages  ----------*/

Route::get('car-styling-und-wrapping', [
    'as'   => 'product.wrapping',
    'uses' => 'PageController@wrapping'
]);

Route::get('werbebeschriftung', [
    'as'   => 'product.folation',
    'uses' => 'PageController@folation'
]);

Route::get('sonnenschutz/fahrzeuge', [
    'as'   => 'product.sunprotection.cars',
    'uses' => 'PageController@sunprotection_cars'
]);

/*----------  Single-pages  ----------*/


// aboutus page
Route::get('ueber-uns/', [
    'as'   => 'page.aboutus',
    'uses' => 'PageController@aboutUs'
]);

// contact page
Route::get('kontakt/anfrage', [
    'as'   => 'page.contact',
    'uses' => 'PageController@contact'
]);

// welcome page
Route::get('/', [
    'as'   => 'page.welcome',
    'uses' => 'PageController@welcome'
]);