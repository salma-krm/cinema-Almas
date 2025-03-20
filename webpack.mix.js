const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js',[]).js('resources/js/dashbord.js', 'public/js',)
    .postCss('resources/css/app.css', 'public/css', [      
    ]).postCss('resources/css/reservation.css', 'public/css',)
    .postCss('resources/css/dashbord.css', 'public/css',)
    .postCss('resources/css/login.css', 'public/css',)
    .postCss('resources/css/register.css', 'public/css',)
    .postCss('resources/css/detailfilm.css', 'public/css',)
    .postCss('resources/css/paiement.css', 'public/css',)
  
    ;
