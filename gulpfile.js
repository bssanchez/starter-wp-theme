'use strict';

const { src, dest, series, watch } = require('gulp');
const sourcemaps = require('gulp-sourcemaps');
const cssnano = require('cssnano');
const sass = require('gulp-sass');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const uglify = require('gulp-uglify');
const plumber = require('gulp-plumber');
const concat = require('gulp-concat');

sass.compiler = require('node-sass');

function scss() {
  const plugins = [
    autoprefixer(),
    cssnano()
  ];

  return src('./src/scss/**/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(postcss(plugins))
    .pipe(sourcemaps.write('.'))
    .pipe(dest('./assets/css'));
};

function javascript() {
  return src('./src/javascript/*.js', { sourcemaps: true })
    .pipe(sourcemaps.init())
    .pipe(plumber())
    // .pipe(concat('main.min.js'))
    .pipe(uglify().on('error', (e) => console.log(e)))
    .pipe(sourcemaps.write('.'))
    .pipe(dest('./assets/js'));
}

function live() {
  watch(['./src/scss/**/*.scss'], scss);
  watch(['./src/javascript/**/*.js'], javascript);
}

exports.scss = scss;
exports.javascript = javascript;
exports.default = series(scss, javascript, live);