const gulp = require('gulp'),
    plumber = require('gulp-plumber'),
    rename = require('gulp-rename'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    cmq = require('gulp-merge-media-queries'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat'),
    notify = require('gulp-notify'),
    minifycss = require('gulp-clean-css'),
    wait = require('gulp-wait');

/* paths */
let path = {
    css: {
        dev: [
            //'../html/_dev/scss/vendor/**/*.scss',
            '../html/_dev/scss/'
        ],
        prod: '../cms/wp-content/themes/holistycznie/assets/css/'
    },
    js: {
        dev: [
            '../html/_dev/js/vendor/*.js',
            '../html/_dev/js/*.js'
        ],
        prod: '../cms/wp-content/themes/holistycznie/assets/js/'
    }
};

let jsFileName = 'main';
let scssFileNames = [
    'main'
];

function css(done){
    scssFileNames.forEach((i,v) => {
        coreScss(scssFileNames[v]);
    });
    done();
}

let onError = (err) => {
    console.log(err);
    err();
};

function coreScss(name) {
    return gulp.src(path.css.dev + name + '.scss')
        .pipe(plumber({
            handleError: onError
        }))
        .pipe(wait(500))
        //.pipe(sourcemaps.init({loadMaps: true}))
        .pipe(sass()
            .on('error', sass.logError))
        //.pipe(sourcemaps.write())
        .pipe(autoprefixer({
            browsers: "> 1%"
        }))
        .pipe(cmq())
        .pipe(concat(name + '.css'))
        .pipe(gulp.dest(path.css.prod))
        .pipe(notify('CSS: Dev... Done!'))
}

function js() {
    return gulp.src(path.js.dev)
        .pipe(plumber({
            handleError: onError
        }))
        .pipe(wait(500))
        .pipe(concat(jsFileName + '.js'))
        .pipe(gulp.dest(path.js.prod))
        .pipe(notify('JS: Dev... Done!'));
}

function CSSProd() {
    return gulp.src(path.css.prod +'/*.css')
        .pipe(minifycss())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest(path.css.prod))
        .pipe(notify('CSS: Prod... done!'))
}

function JSProd() {
    return gulp.src(path.js.prod + jsFileName + '.js')
        .pipe(uglify())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest(path.js.prod))
        .pipe(notify('JS: Prod... done!'))
}

gulp.task('default', gulp.parallel(css, js), done => {
    done();
});

gulp.task('prod', gulp.parallel(CSSProd,JSProd), done => {
    done();
});

gulp.task('watch', done => {
    gulp.watch(path.js.dev, gulp.series(js));
    gulp.watch(path.css.dev, gulp.series(css));
    done();
});

gulp.task('test', done => {
    console.log('=========================================================\n\n\tZajebiście Ci poszło. Umiesz Gulp\'a!\n\n=========================================================');
    done();
});