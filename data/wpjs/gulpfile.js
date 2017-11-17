// GulpFiles

var gulp = require('gulp');
var uglify = require('gulp-uglify');

gulp.task('taskname1', function() {
  var d = new Date();
  var timestamp = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
  // place code for your default task here
  console.log('taskname1 '+timestamp);
});

gulp.task('default', ['taskname1']);
