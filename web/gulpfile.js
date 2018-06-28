'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('default', [
    'sass',
    'jquery',
    'lightgallery',
    'lightgallery-css',
    'lightgallery-fonts'
    ], function () {

});

gulp.task('sass', function () {
    return gulp.src('scss/styles.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('public/css/'));
});

gulp.task('jquery', function () {
    return gulp.src('node_modules/jquery/dist/jquery.min.js')
        .pipe(gulp.dest('public/js/'));
});

gulp.task('lightgallery', function () {
    return gulp.src('node_modules/lightgallery/dist/js/lightgallery.min.js')
        .pipe(gulp.dest('public/js/'));
});

gulp.task('lightgallery-css', function () {
    return gulp.src('node_modules/lightgallery/dist/css/lightgallery.css')
        .pipe(gulp.dest('public/css/'));
});

gulp.task('lightgallery-fonts', function () {
    return gulp.src('node_modules/lightgallery/dist/fonts/**.*')
        .pipe(gulp.dest('public/fonts/'));
});

gulp.task('watch', function () {
    gulp.watch('scss/styles.scss', ['sass']);
});