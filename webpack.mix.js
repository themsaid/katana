const mix = require('laravel-mix');
const argv = require('yargs').argv;
const exec = require('child_process').exec;

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

let env = argv.e || argv.env || 'default';

mix.js('content/_includes/_assets/js/app.js', 'content/assets/js')
   .sass('content/_includes/_assets/sass/app.scss', 'content/assets/css');

   exec('php katana build --env=' + env, [
        './content/*',
        './content/**/*',
        './config*.php'
]);
