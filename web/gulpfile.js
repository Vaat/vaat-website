'use strict';

const gulp = require('gulp');
const { series } = require('gulp');
const sass = require('gulp-sass');

exports.default = series(
    sassTask,
    jqueryTask,
    lightgalleryTask,
    lightgalleryCssTask,
    lightgalleryFontsTask
);

function sassTask() {
    return gulp.src(['scss/styles.scss', 'scss/revolution.scss'])
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('public/css/'));
}

function jqueryTask() {
    return gulp.src('node_modules/jquery/dist/jquery.min.js')
        .pipe(gulp.dest('public/js/'));
}

function lightgalleryTask() {
    return gulp.src('node_modules/lightgallery/dist/js/lightgallery.min.js')
        .pipe(gulp.dest('public/js/'));
}

function lightgalleryCssTask() {
    return gulp.src('node_modules/lightgallery/dist/css/lightgallery.css')
        .pipe(gulp.dest('public/css/'));
}

function lightgalleryFontsTask() {
    return gulp.src('node_modules/lightgallery/dist/fonts/**.*')
        .pipe(gulp.dest('public/fonts/'));
}
