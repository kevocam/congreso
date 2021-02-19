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

/* Stylos CUSTOM */
mix.sass('resources/sass/styleSass.scss', 'public/css');
mix.sass('resources/sass/welcome.scss', 'public/css');
/* JS CUSTOM */
mix.js('resources/js/welcome.js', 'public/js')
mix.js('resources/js/master.js', 'public/js')

/* Tailwind */
mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ]);

if (mix.inProduction()) {
    mix.version();
}