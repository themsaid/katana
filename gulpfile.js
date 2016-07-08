var gulp = require('gulp');
var elixir = require('laravel-elixir');
var argv = require('yargs').argv;

elixir.config.assetsPath = 'content/_includes/_assets';
elixir.config.publicPath = 'content/assets';

elixir(function(mix) {
    var env = argv.e || argv.env || 'default';

    mix.styles(['style.css'])
        .exec('php katana build --env=' + env, [
            './content/*',
            './content/**/*',
            './config*.php'
        ])
        .browserSync({
            server: {
                baseDir: 'public'
            },
            proxy: null,
            files: ['public/**/*']
        });
});