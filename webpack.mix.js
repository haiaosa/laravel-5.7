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

mix.styles([
	// 'resources/css/debug.css',
	'resources/css/grid.css',
	'resources/css/helpers.css',
	'resources/css/normalize.css',
	'resources/css/bulma.css',
	], 'public/css/truyen1vs3.css');

mix.styles('resources/css/debug.css', 'public/css/debug.css');

mix.browserSync('truyen1vs3.test');
