var gulp = require('gulp'),
    plumber = require('gulp-plumber'),
    rename = require('gulp-rename'), //adds prefixes and sufixes for files
    sass = require('gulp-sass'),
    postcss = require('gulp-postcss'), //runs css autoprefixer
    autoprefixer = require('autoprefixer'),
    csscomb = require('gulp-csscomb'), //cleans messy css
    cmq = require('gulp-merge-media-queries'), //merges mediaquery
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat'),
    notify = require('gulp-notify'),
    minifycss = require('gulp-minify-css'),
    wait = require('gulp-wait');

var baseName = 'main';

/* paths */
var path = {
    css: {
        dev: [
            '!../_dev/scss/vendor/lib/**/*.scss',
            '!../_dev/scss/vendor/lib/**/*.css',
            '../_dev/scss/vendor/**/*.scss',
            '../_dev/scss/*.scss'
        ],
        prod: '../prod/css/',
    },
    js: {
        dev: [
            '../_dev/js/vendor/*.js',
            '../_dev/js/*.js'
        ],
        prod: '../prod/js/'
    },
    html: '../index.php',
    sync: './'
};

let onError = (err) => {
    console.log(err);
}

gulp.task('sync', function () {

    bs.init({
        proxy: 'server_name form hosts',
    });
});

gulp.task('css', () => {
    return gulp.src(path.css.dev)
        .pipe(plumber({
            handleError: onError
        }))
        .pipe(wait(500))
        .pipe(sass
            .sync({
                outputStyle: 'compressed'
            })
            .on('error', sass.logError))
        .pipe(concat(baseName + '.css'))
        .pipe(gulp.dest(path.css.prod))
        .pipe(postcss([
            autoprefixer({
                browsers: "> 1%"
            })
        ]))
        .pipe(cmq())
        .pipe(csscomb(path.css.prod + baseName + '.css'))
        .pipe(gulp.dest(path.css.prod))
        //.pipe(notify('CSS Done!'))
});

gulp.task('js', () => {
    return gulp.src(path.js.dev)
        .pipe(plumber({
            handleError: onError
        }))
        .pipe(concat(baseName + '.js'))
        .pipe(gulp.dest(path.js.prod))
        .pipe(notify('JS Done!'))
});

gulp.task('css-dev', () => {
    return gulp.src(path.css.dev)
        .pipe(plumber({
            handleError: onError
        }))
        .pipe(wait(500))
        .pipe(sass
            .sync({
                outputStyle: 'compressed'
            })
            .on('error', sass.logError))
        .pipe(concat(baseName + '.min.css'))
        .pipe(gulp.dest(path.css.prod))
        .pipe(postcss([
            autoprefixer({
                browsers: "> 1%"
            })
        ]))
        .pipe(cmq())
        .pipe(csscomb(path.css.prod + baseName + '.min.css'))
        .pipe(gulp.dest(path.css.prod))
        //.pipe(notify('CSS Done!'))
});

gulp.task('js-dev', () => {
    return gulp.src(path.js.dev)
        .pipe(plumber({
            handleError: onError
        }))
        .pipe(concat(baseName + '.min.js'))
        .pipe(gulp.dest(path.js.prod))
        .pipe(notify('JS Done!'))
});

gulp.task('CSSProd', ['css'], () => {
    return gulp.src(path.css.prod + baseName + '.css')
        .pipe(minifycss())
        .pipe(rename({
            basename: baseName,
            suffix: '.min'
        }))
        .pipe(gulp.dest(path.css.prod))
});

gulp.task('JSProd', () => {
    return gulp.src(path.js.dev)
        .pipe(plumber({
            handleError: onError
        }))
        .pipe(concat(baseName + '.js'))
        .pipe(gulp.dest(path.js.prod))
        .pipe(uglify())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest(path.js.prod))
});

gulp.task('default', ['js', 'css']);

gulp.task('prod', ['CSSProd', 'JSProd']);

gulp.task('watch', () => {
    gulp.watch(path.js.dev, ['js-dev'])
    gulp.watch(path.css.dev, ['css-dev'])
});