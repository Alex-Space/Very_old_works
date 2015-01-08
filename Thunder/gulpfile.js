"use strict";

var gulp = require('gulp');
var notify = require('gulp-notify');
var compass = require('gulp-for-compass');
var livereload = require('gulp-livereload');
var connect = require('gulp-connect');
var minifyCSS = require('gulp-minify-css');
var rename = require("gulp-rename");

// connect
gulp.task('connect', function() {
  connect.server({
    root: '',
    livereload: true
  });
});

//css
gulp.task('css', function () {
  gulp.src('css/style.css')
    .pipe(gulp.dest('css'))
    .pipe(notify("Done!"))
    .pipe(compass({
	    sassDir: 'sass',
	    cssDir: 'css',
	    force: true
	}))
	.pipe(connect.reload())
    .pipe(minifyCSS({keepBreaks:false}))
    .pipe(rename("css/style.min.css"))
    .pipe(gulp.dest(''));
});

// html
gulp.task('html', function() {
	gulp.src('index.html')
	.pipe(connect.reload());
});

// watch
gulp.task('watch', function() {
	gulp.watch('sass/*.scss', ['css'])
	gulp.watch('index.html', ['html'])
});

// default
gulp.task('default', ['connect', 'html', 'css', 'watch']);