var gulp = require("gulp"),
    browserSync = require("browser-sync").create(),
    $ = require("gulp-load-plugins")({
        lazy: true
    });

gulp.task("css", function() {

    return gulp.src("src/sass/main.scss")
        .pipe($.plumber())
        .pipe($.sass.sync({
            outputStyle: "compressed"
        }))
        .pipe($.autoprefixer({
            browsers: ["last 5 versions", "IE 10"]
        }))
        .pipe(gulp.dest("src/css/"))
        .pipe(browserSync.stream());

});

gulp.task("server", function() {

    browserSync.init({
        server: "src/"
    });

});

gulp.task("watch", function() {

    gulp.watch("src/sass/**/*.scss", ["css"]);
    gulp.watch(["src/*.html", "src/js/**/*.js"], browserSync.reload);

});

gulp.task("default", ["css", "server", "watch"]);