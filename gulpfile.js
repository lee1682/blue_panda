const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const browserSync = require('browser-sync').create();

const styleSRC = 'app/sass/style.scss';
const styleDIST = 'dist/css';


//compile scss to css

function style() {
    //1.find scsc
    return gulp.src(styleSRC)
    //2.pass scss to compile
        .pipe(sass())
    //3.save compiled css
        .pipe(gulp.dest(styleDIST))
        //4.stream changes to all browsers
    .pipe(browserSync.stream());
}

function watch() {


     browserSync.init({
        proxy: "http://localhost/bpa"
    });
    gulp.watch("*.php").on("change", browserSync.reload);
    gulp.watch("app/sass/**/*.scss", style);
    
}

exports.style = style;
exports.watch = watch;