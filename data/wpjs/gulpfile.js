// GulpFiles

var gulp = require('gulp');
var uglify = require('gulp-uglify');

gulp.task('minify_css_and_copy', function() {
  var d = new Date();
  var timestamp = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
  // place code for your default task here
  console.log('Running Gulp minify_css_and_copy at '+timestamp);
});

gulp.task('taskname2', function() {
  var d = new Date();
  var timestamp = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
  // place code for your default task here
  console.log('Running Gulp taskname2 at '+timestamp);
});

gulp.task('default', ['minify_css_and_copy']);
