// GulpFiles

var gulp = require('gulp');
var uglify = require('gulp-uglify');
var cleancss = require('gulp-clean-css');
var concat = require('gulp-concat');

gulp.task('minify_css_and_copy', function() {
  var d = new Date();
  var timestamp = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
  // place code for your default task here
  console.log('Minifying css at '+timestamp);

  return gulp.src('dev/*.css')
  .pipe(cleancss())
  .pipe(concat('main.css'))
  .pipe(gulp.dest('wp-content/themes/twentyfifteen/css'));
});

gulp.task('php', function (){
  console.log('Yu have changed a PHP file');
});

gulp.task('watch', function () {
  gulp.watch('dev/*.css', ['minify_css_and_copy']);
  gulp.watch('wp-content/themes/twentyfifteen/*.php', ['php']);
  console.log('You have changed a file');
});

gulp.task('default', ['watch']);
