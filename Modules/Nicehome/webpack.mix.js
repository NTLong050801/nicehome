const dotenvExpand = require('dotenv-expand');
dotenvExpand(require('dotenv').config({ path: '../../.env'/*, debug: true*/}));

const mix = require('laravel-mix');
require('laravel-mix-merge-manifest');

mix.setPublicPath('../../public').mergeManifest();

mix.js(__dirname + '/Resources/assets/js/index.js',  '/public/js/index.js')
    .sass( __dirname + '/Resources/assets/sass/style.scss',  '/public/css/style.css')
    .sass( __dirname + '/Resources/assets/sass/design.scss',  '/public/css/design.css')
    .sass( __dirname + '/Resources/assets/sass/detail.scss',  '/public/css/detail.css')
    .js(__dirname + '/Resources/assets/js/detail.js',  '/public/js/detail.js')
    .js(__dirname + '/Resources/assets/js/design.js',  '/public/js/design.js');

if (mix.inProduction()) {
    mix.version();
}
