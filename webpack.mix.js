const { mix } = require('laravel-mix');

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

mix.js('resources/assets/js/main.js',  'public/js')
   .js('resources/assets/js/admin.js', 'public/js')
   .sass('resources/assets/sass/main.scss',  'public/css')
   .sass('resources/assets/sass/admin.scss', 'public/css')
   .sass();


    /********************/
    /* Copy Stylesheets */
    /********************/

    // Bootstrap
    //mix.copy('vendor/bower_components/gentelella/src/scss/*.scss', 'public/admin/css/*.css');

    // Font awesome
    //mix.copy('vendor/bower_components/gentelella/vendors/font-awesome/css/font-awesome.min.css', 'public/css/font-awesome.min.css');

    // Gentelella
    //mix.copy('vendor/bower_components/gentelella/build/css/custom.min.css', 'public/css/gentelella.min.css');

    /****************/
    /* Copy Scripts */
    /****************/

    // Bootstrap
    //mix.copy('vendor/bower_components/gentelella/vendors/bootstrap/dist/js/bootstrap.min.js', 'public/js/bootstrap.min.js');

    // jQuery
    //mix.copy('vendor/bower_components/gentelella/vendors/jquery/dist/jquery.min.js', 'public/js/jquery.min.js');

    // Gentelella
    //mix.copy('vendor/bower_components/gentelella/build/js/custom.min.js', 'public/js/gentelella.min.js');

    /**************/
    /* Copy Fonts */
    /**************/

    // Bootstrap
    //mix.copy('vendor/bower_components/gentelella/vendors/bootstrap/fonts/', 'public/fonts');

    // Font awesome
    //mix.copy('vendor/bower_components/gentelella/vendors/font-awesome/fonts/', 'public/fonts');