// Sass configuration
var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function() {
    gulp.src('./assets/stylesheets/style.scss')
        .pipe(sass().on('error', sass.logError))
        //.pipe(gulp.dest(function(f) {
        //    return f.base;
        //}))
        .pipe(gulp.dest('./assets/css'))
});

gulp.task('default', ['sass'], function() {
    gulp.watch('./assets/stylesheets/**/*.scss', ['sass']);
})