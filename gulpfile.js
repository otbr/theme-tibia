var gulp = require('gulp');
var shell = require('gulp-shell');
var elixir = require('laravel-elixir');

elixir.config.assetsDir = 'resources/';
elixir.config.publicDir = 'public/';
elixir.config.cssOutput = elixir.config.publicDir + 'css/';
elixir.config.jsOutput = elixir.config.publicDir + 'js/';

elixir.config.production = true;
elixir.config.sourcemaps = false;

elixir(function(mix) {
    mix
        .less('app.less')
        .browserify('app.js', elixir.config.jsOutput + 'app.min.js')
        .copy(elixir.config.assetsDir + 'img', elixir.config.publicDir + 'img')
        .task('publish_assets')
        .version([
            'css/app.css',
            'js/app.min.js'
        ])
        
        .registerWatcher('copy', elixir.config.assetsDir + '/img/*')
        .registerWatcher('publish_assets', elixir.config.publicDir + '/**/*');
});

gulp.task('publish_assets', shell.task([
    "php ../../../artisan vendor:publish --tag=public --force"
]));
