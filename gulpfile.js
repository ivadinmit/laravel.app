var elixir = require('laravel-elixir');

var paths = {
  'SOURCE': './resources/assets/',
  'DESTINATION': './public/assets/',
  'NODE': './node_modules/'
};

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss', paths.DESTINATION + 'css');

    mix.babel([
      paths.SOURCE + 'js/script.js'
    ], paths.DESTINATION + 'js/script.js', './');
});
