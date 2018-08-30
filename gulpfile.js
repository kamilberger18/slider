'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var babel = require('gulp-babel');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var prefixer = require('gulp-autoprefixer');
var cleaner = require('gulp-clean');


gulp.task('clean', function () {
    return gulp.src('./dist', {read: false})
        .pipe(cleaner());
});

gulp.task('sass', function () {
    return gulp.src('./app/sass/*.scss')
        .pipe(sass().on('error', sass.logError))
    .pipe(prefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(concat('main.css'))
        .pipe(gulp.dest('./dist'));
});



gulp.task('concat', function() {
    return gulp.src(['node_modules/jquery/dist/jquery.js', './app/js/*.js'])
    
        .pipe(concat('bundle.js'))
        .pipe(uglify())
        .pipe(gulp.dest('./dist/'));
});


gulp.task('default', ['clean','sass','concat']);