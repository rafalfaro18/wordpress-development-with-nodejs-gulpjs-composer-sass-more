// GulpFiles

var gulp = require('gulp');
var uglify = require('gulp-uglify');
var cleancss = require('gulp-clean-css');
var concat = require('gulp-concat');
var sass = require('gulp-sass');

gulp.task('process_sass', function () {
  console.log('Now processing SASS');
  return gulp.src('dev/*.scss')
  .pipe(sass())
  .pipe(gulp.dest('wp-content/themes/twentyfifteen/css'));
});

gulp.task('php', function (){
  console.log('Yu have changed a PHP file');
});

gulp.task('watch', function () {
  gulp.watch('dev/*.css', ['minify_css_and_copy']);
  gulp.watch('wp-content/**/**/*.php', ['php']);
  console.log('You have changed a file');
});

gulp.task('message', function() {
  console.log('this is a message');
});

gulp.task('default', ['message', 'watch', 'process_sass']);
