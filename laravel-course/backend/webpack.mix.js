const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

 mix.js([
    'resources/js/bootstrap.js',
    'resources/js/app.js'
    ], 'public/assets/js/app.js')
    .vue()
    .styles([
        'resources/css/welcome.css',
        'resources/css/faq.css',
    ],'public/css/app.css')
    //.sass('resources/sass/app.scss', 'public/css/bootstrap.css')
    .sass('resources/sass/app.scss', 'public/css')
    .options({
        processCssUrls: false,
    });
