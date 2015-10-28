<?php


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