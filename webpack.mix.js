let mix = require('laravel-mix');

mix.styles('content/_includes/_assets/css/style.css', 'content/assets/css/all.css')
    .browserSync({
        server: {
            baseDir: 'public'
        },
        proxy: null,
        files: ['public/**/*']
    })
