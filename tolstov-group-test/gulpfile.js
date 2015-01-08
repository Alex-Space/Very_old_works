var gulp = require("gulp");
var rename = require("gulp-rename");
var compass = require("gulp-for-compass");

gulp.task("sass", function(){
	gulp.src("sass/*.scss")
	.pipe(compass({
            sassDir: 'sass',
            cssDir: 'css',
            force: true
        }))
	.pipe(gulp.dest('dist/css'))
});

gulp.task("watch", function(){
	gulp.watch('sass/*.scss', ["sass"]);
});

gulp.task("default", ["sass", "watch"]);
