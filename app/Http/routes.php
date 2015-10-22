<?php

Route::get('ueber-uns/', [
    'as'   => 'page.aboutus',
    'uses' => 'PageController@aboutUs'
]);

Route::get('car-styling-und-wrapping', [
    'as'   => 'product.wrapping',
    'uses' => 'PageController@wrapping'
]);

Route::get('werbebeschriftung', [
    'as'   => 'product.folation',
    'uses' => 'PageController@folation'
]);

Route::get('kontakt/anfrage', [
    'as'   => 'contact.app',
    'uses' => 'PageController@welcome'
]);

Route::get('sonnenschutz/fahrzeuge', [
    'as'   => 'sunprotection.cars',
    'uses' => 'PageController@sunprotection_cars'
]);

// welcome page
Route::get('/', [
    'as'   => 'welcome',
    'uses' => 'PageController@welcome'
]);