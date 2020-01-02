//gulpfile.js
var gulp = require('gulp'),
    minifyCSS = require('gulp-clean-css'),
    uglify = require('gulp-uglify'),
    rename = require("gulp-rename"),
    sass = require('gulp-sass');


// This is for the path of sass compilation
var sassFiles = 'srcxtreme/scss/style.scss',
    cssDest = 'public/css/';

// This is for the process of sass compilation
gulp.task('styles', gulp.series (function() {
    gulp.src(sassFiles)
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest(cssDest));
}));


// This is for the minify css

gulp.task('minify-css', gulp.series (function() {
    return gulp.src('public/css/*.css', '!public/css/**/*.min.css')
        .pipe(rename({ suffix: '.min' }))
        .pipe(minifyCSS())
        .pipe(gulp.dest(cssDest))
}));
// This is for the minifyjs
gulp.task('js', gulp.series (function() {
    return gulp.src(['public/js/custom.js', 'public/js/app.js', '!public/js/**/*.min.js'])
        .pipe(rename({ suffix: '.min' }))
        .pipe(uglify())
        .pipe(gulp.dest('public/js/'))
}));



//Setting up the Watcher

gulp.task('watch', gulp.series (function() {
    gulp.watch('srcxtreme/scss/**/*.scss', gulp.parallel(['styles']));
    gulp.watch('public/js/**/*.js', gulp.parallel(['js']));

}));
gulp.task('watchcss', gulp.series (function() {
    gulp.watch('public/css/style.css', gulp.parallel(['minify-css']));

}));

// This is for the copy node module depandancy to the other folder

var npmDist = require('gulp-npm-dist');


// Copy dependencies to ./public/libs/
gulp.task('copy', gulp.series (function() {
    gulp.src(npmDist(), { base: './node_modules' })
        .pipe(gulp.dest('./assets/libs'));
}));



//Monitor

gulp.task('default', gulp.parallel('watch', 'watchcss'));
