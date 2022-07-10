const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const sourcemaps = require("gulp-sourcemaps");
const autoprefixer = require("gulp-autoprefixer");
const webpack = require("webpack");
const webpackStream = require('webpack-stream');
const webpackConfig = require('./webpack.config.js');





const css = function() {
    return gulp.src("assets/scss/*.scss")
        .pipe(sourcemaps.init())
        .pipe(
            sass({
                outputStyle : "compressed"
            }).on("error", sass.logError)
        )
        .pipe(autoprefixer()) //autoprefixy https://github.com/browserslist/browserslist#queries
        .pipe(sourcemaps.write("."))
        .pipe(gulp.dest("assets/css/"));
}
/*const js = function(cb) {
    return webpack(require("./webpack.config.js"), function(err, stats) {
        if (err) throw err;
        console.log(stats);
        cb();
    })
}*/
const js = function() {
    return gulp.src('assets/js/src/*.js')
        .pipe(webpackStream(webpackConfig), webpack)
        .pipe(gulp.dest('assets/js/dist'));
}

const watch = function(cb) {
    gulp.watch("assets/scss/*.scss", {usePolling : true}, gulp.series(css));
    gulp.watch("assets/js/src/*.js", gulp.series(js));
    cb();
}

exports.default = gulp.series(css, js, watch);
exports.css = css;
exports.js = js;
exports.watch = watch;