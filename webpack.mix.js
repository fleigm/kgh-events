const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss')

mix.disableNotifications();

mix.less('resources/design/app.less', 'public/css')
    .options({
        postCss: [
            tailwindcss('resources/design/tailwind.config.js'),
        ]
    });

mix.copyDirectory('resources/fonts', 'public/fonts');
