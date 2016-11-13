'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('default', ['sass'], function () {

});

gulp.task('sass', function () {
    return gulp.src('scss/styles.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('css/'));
});

gulp.task('watch', function () {
    gulp.watch('scss/styles.scss', ['sass']);
});