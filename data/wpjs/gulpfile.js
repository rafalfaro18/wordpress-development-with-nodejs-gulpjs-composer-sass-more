// GulpFiles

var gulp = require('gulp');

gulp.task('default', function() {
  var d = new Date();
  var timestamp = d.getHours() + ":" + d.getMinutes() + ":" d.getSeconds();
  // place code for your default task here
  console.log('running gulp '+timestamp);
});
