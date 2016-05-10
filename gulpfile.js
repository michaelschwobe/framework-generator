'use strict';

var gulp = require('gulp');

// Development
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var connect = require('gulp-connect-php');
var browserSync = require('browser-sync').create();

// Production
var cssnano = require('gulp-cssnano');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');

// Configuration
var config = {
  entry: './src/',
  output: './dist/'
};

/*----------------------------------------------------------------------------*/
/* Default
/*----------------------------------------------------------------------------*/

gulp.task('styles', function() {
  return gulp.src([
      config.entry + 'sass/**/*.scss',
      config.entry + '_includes/**/*.scss'
    ])
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer({
      browsers: ['last 2 versions']
    }))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(config.entry + 'css'))
    .pipe(browserSync.stream());
});

gulp.task('serve', function() {
  connect.server({
    base: config.entry,
    stdio: 'ignore'
  }, function() {
    browserSync.init({
      proxy: '127.0.0.1:8000'
    });
  });
  gulp.watch(config.entry + '**/*.scss', ['styles']);
  gulp.watch(config.entry + '**/*.js').on('change', browserSync.reload);
  gulp.watch(config.entry + '**/*.+(html|php)').on('change', browserSync.reload);
});

gulp.task('default', ['styles', 'serve']);

/*----------------------------------------------------------------------------*/
/* Build
/*----------------------------------------------------------------------------*/

gulp.task('build:styles', ['styles'], function() {
  return gulp.src([
      config.entry + 'css/**/*.css',
      '!' + config.entry + 'css/app-styles.css'
    ])
    .pipe(cssnano())
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(gulp.dest(config.output));
});

gulp.task('build:scripts', function() {
  return gulp.src(config.entry + 'js/**/*.js')
    .pipe(uglify())
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(gulp.dest(config.output));
});

gulp.task('build', ['build:styles', 'build:scripts']);
