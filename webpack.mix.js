const mix = require("laravel-mix");

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

mix.styles(
    [
        "public/assets/css/bulma.css",
        "public/assets/css/app.css",
        "public/assets/css/core_startup.css",
    ],
    "public/assets/bundle/app.css"
).version();

mix.scripts(
    [
        "public/assets/js/app.js",
        "public/assets/js/functions.js",
        "public/assets/js/contact.js",
        "public/assets/js/main.js",
    ],
    "public/assets/bundle/app.js"
).version();
