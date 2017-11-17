// GulpFiles

var gulp = require('gulp');
var uglify = require('gulp-uglify');

gulp.task('runnow', function() {
  var d = new Date();
  var timestamp = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
  // place code for your default task here
  console.log('runnow '+timestamp);
});

gulp.task('default', ['runnow']);
