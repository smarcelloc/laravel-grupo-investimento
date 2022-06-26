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

mix.js('resources/js/app.js', 'public/js/app.js').sourceMaps(!mix.inProduction());
mix.sass('resources/scss/app.scss', 'public/css/app.css');

// Para funcionar o favicon.ico
mix.setPublicPath('public');

// Para funcionar o font-awesome
mix.setResourceRoot('../');

mix.disableNotifications();
mix.version();
