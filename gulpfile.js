// npm install --save-dev gulp gulp-sass gulp-rename  gulp-autoprefixer gulp-uglify gulp-concat gulp-cssnano es6-promise gulp-watch

var gulp         = require('gulp'),
    sass         = require('gulp-sass'),
    rename       = require('gulp-rename'),
    uglify       = require('gulp-uglify'),
    autoprefixer = require('gulp-autoprefixer'),
    concat       = require('gulp-concat'),
    cssnano      = require('gulp-cssnano'),
    promise      = require('es6-promise').polyfill(),
    watch        = require('gulp-watch');

var sassPaths = [
    'bower_components/foundation-sites/scss',
    'bower_components/motion-ui/src'
];

gulp.task('fa', function() {
    return gulp.src(
        'bower_components/font-awesome/fonts/**.*'
    )
        .pipe(gulp.dest('assets/fonts/font-awesome/'));
});

gulp.task('sass', function() {
    return gulp.src('assets/scss/app.scss')
        .pipe(sass({
            includePaths: sassPaths,
            outputStyle: 'compressed' // if css compressed **file size**
        }).on('error', sass.logError))
        .pipe(cssnano({ zindex: false }))
        .pipe(rename({ suffix: '.min' }))
        .pipe(autoprefixer({
            browsers: ['last 2 versions', 'ie >= 9']
        }))
        .pipe(gulp.dest('assets/css'));
});

gulp.task('scripts', function(){
    return gulp.src([
        'bower_components/jquery/dist/jquery.js',
        'bower_components/what-input/what-input.js',
        'bower_components/foundation-sites/dist/js/foundation.js',
        'bower_components/foundation-sites/dist/js/plugins/foundation.core.js',
        'bower_components/foundation-sites/dist/js/plugins/foundation.equalizer.js',
        'bower_components/foundation-sites/dist/js/plugins/foundation.tabs.js',
        'bower_components/foundation-sites/dist/js/plugins/foundation.accordion.js',
        'bower_components/foundation-sites/dist/js/plugins/foundation.util.mediaQuery.js',
        'bower_components/foundation-sites/dist/js/plugins/foundation.util.triggers.js',
        'bower_components/foundation-sites/dist/js/plugins/foundation.util.keyboard.js',
        'bower_components/foundation-sites/dist/js/plugins/foundation.util.motion.js',
        'bower_components/foundation-sites/dist/js/plugins/foundation.util.nest.js',
        'bower_components/foundation-sites/dist/js/plugins/foundation.util.box.js',
        'bower_components/foundation-sites/dist/js/plugins/foundation.util.timerAndImageLoader.js',
        'assets/js/custom/foundation.js',
        'assets/js/custom/main.js',
    ])
        .pipe(concat('main.js'))
        .pipe(rename({ suffix: '.min' }))
        .pipe(uglify())
        .pipe(gulp.dest('assets/js/'));
});

gulp.task('default', ['sass', 'scripts', 'fa']);

gulp.task('watch', ['sass', 'scripts'], function(){
    gulp.watch('assets/scss/**/*.scss', ['sass']);
    gulp.watch('assets/js/custom/*.js', ['scripts']);
});
