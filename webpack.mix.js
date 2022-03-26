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

mix.js('resources/js/app.js', 'public/js/auth.js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css/auth.css');
    mix.styles('resources/css/bootstrap.css','public/css/theme.css')
    mix.styles([
        'resources/css/style.css',
        'resources/css/contactstyle.css',
        'resources/css/faqstyle.css',
        'resources/css/single.css',
        'resources/css/medile.css',
        'resources/css/jquery.slidey.min.css',
        'resources/css/popuo-box.css',
        'resources/css/font-awesome.min.css',
        'resources/css/basictable.css',
        'resources/css/flexslider.css',
        'resources/css/list.css',
        'resources/css/news.css',
        'resources/css/owl.carousel.css',
        'resources/css/table-style.css',
    ],"public/css/app.css")
    /**
     * include bootstrap fron node_modules
     */

    /**
     *  comprisser  tous les fichier js en app.js
     */
    mix.js([
        'resources/js/jquery-2.1.4.min.js',
        'resources/js/jquery.flexslider.js',
        'resources/js/jquery.magnific-popup.js',
    /*     'resources/js/jquery.mobile.custom.min.js',
     */    'resources/js/jquery.slidey.js',
        'resources/js/jquery.tools.min.js',
        'resources/js/jquery.basictable.min.js',
    /*     'public/js/jquery.dotdotdot.min',
     */    'node_modules/bootstrap/dist/js/bootstrap.min.js',
        'resources/js/bootstrap.min.js',
        'resources/js/easing.js',
        'resources/js/move-top.js',
        'resources/js/owl.carousel.js',
        'resources/js/simplePlayer.js',
    ],
        'public/js/app.js');
