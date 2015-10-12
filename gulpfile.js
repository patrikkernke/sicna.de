var elixir = require('laravel-elixir');
var postStylus = require('poststylus');
var nib = require('nib');

// Elixir Plug-Ins
require('laravel-elixir-stylus');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.stylus('app.styl', null, { use: [postStylus('lost'), nib()]})
    .browserSync({ proxy: 'sicna.app'});
    mix.copy('node_modules/font-awesome/fonts', 'public/fonts');

});
