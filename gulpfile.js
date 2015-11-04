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
    mix.styles('lightbox.css');
    mix.styles('node_modules/font-awesome/css/font-awesome.css', 'public/css/font-awesome.css', './');

    mix.stylus('app.styl', 
                null, 
                { 
                    use: [postStylus('lost'), nib()]
                })
    .browserSync({ proxy: 'sicna.app'});

    mix.browserify('app.js');

    mix.scripts([
        'vendor/jquery.js',
        'vendor/lightbox.min.js'
    ], 'public/js/vendor.js');

    mix.copy('resources/assets/js/vendor/lightbox.min.map', 'public/js/lightbox.min.map')
        .copy('node_modules/font-awesome/fonts', 'public/fonts')

});
