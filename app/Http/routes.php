<?php

// welcome page
Route::get('/', [
    'as'   => 'welcome',
    'uses' => 'PageController@welcome'
]);
