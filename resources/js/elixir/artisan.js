var Elixir = require('laravel-elixir');
var shell = require('gulp-shell');
var gulp = require('gulp');

/*
 |----------------------------------------------------------------
 | Artisan
 |----------------------------------------------------------------
 |
 | This task will call Laravel's vendor:publish artisan command
 | and publish all of the files that has been assigned to the
 | specific tag group. May specify whether to force or not.
 |
 */

Elixir.extend('artisan', function (command, watcher, dependencies) {
    dependencies = dependencies ? dependencies : [];

    new Elixir.Task('artisan', function () {
        return gulp.task('artisan', dependencies, shell.task([
            'php ../../../artisan ' + command
        ]));
    })
    .watch(watcher);
});
