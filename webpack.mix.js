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

mix
    .setPublicPath("public")
    .setResourceRoot("../../") // Turns assets paths in css relative to css file
    .sass("resources/sass/frontend/app.scss", "css/frontend");

mix
    .js("resources/js/frontend/app.js", "js/frontend")

    // Extract packages from node_modules, only those used by frontend, to frontend/vendor.js
    .extract([
        'aos',
        "bootstrap",
        'feather-icons',
        "perfect-scrollbar",
        "popper.js",
        'swiper',
        "waypoints",
        "webfontloader",
        "prismjs",
    ]);

if (mix.inProduction()) {
    mix
        .version()
        .options({
            // Optimize JS minification process
            terser: {
                //cache: true,
                parallel: true
                //sourceMap: false
            }
        });
} else {
    // Uses inline source-maps on development
    mix
        .sourceMaps()
        .webpackConfig({
            stats: {
                children: true
            },
            devtool: "inline-source-map"
        });
}
