//DEPENDENCIAS:
//Gulp
const { src, dest, watch, parallel } = require("gulp");

//CSS
const sass = require("gulp-sass")(require("sass"));
const plumber = require("gulp-plumber"); // plumber(), para que no interrumpa el workflow cuando marca errores
const autoprefixer = require("autoprefixer");
const cssnano = require("cssnano");
const postcss = require("gulp-postcss");
const sourcemaps = require("gulp-sourcemaps");

const concat = require("gulp-concat");
const rename = require("gulp-rename");
//Imagenes
const webp = require("gulp-webp");
const imagemin = require("gulp-imagemin"); // Minificar imagenes
const cache = require("gulp-cache");

const notify = require("gulp-notify");
const clean = require("gulp-clean");

//JavaScript terser minifica codigo js => como cssnano
const terser = require("gulp-terser-js");

const paths = {
  scss: "src/scss/**/*.scss",
  js: "src/js/**/*.js",
  imagenes: "src/img/**/*",
};

function css() {
  return src(paths.scss)
    .pipe(sourcemaps.init())
    .pipe(plumber({
        errorHandler: function (err) {
          console.log(err); // Imprime el error en la consola
          this.emit("end"); // Continúa con la ejecución de Gulp
        }, })
    )
    .pipe(sass())
    .pipe(postcss([autoprefixer(), cssnano()]))
    .pipe(sourcemaps.write("."))
    .pipe(dest("build/css"));
}

function javascript() {
  return src(paths.js)
    .pipe(sourcemaps.init())
    .pipe(concat("bundle.js"))
    .pipe(terser())
    .pipe(sourcemaps.write("."))
    .pipe(rename({ suffix: ".min" }))
    .pipe(dest("./build/js"));
}

function imagenes() {
  return src(paths.imagenes)
    .pipe(cache(imagemin({ optimizationLevel: 3 })))
    .pipe(dest("build/img"))
    .pipe(notify({ message: "Imagen Completada" }));
}

function versionWebp() {
  return src(paths.imagenes)
    .pipe(webp())
    .pipe(dest("build/img"))
    .pipe(notify({ message: "Imagen Completada" }));
}

function watchArchivos() {
  watch(paths.scss, css);
  watch(paths.js, javascript);
  watch(paths.imagenes, imagenes);
  watch(paths.imagenes, versionWebp);
}

exports.css = css;
exports.watchArchivos = watchArchivos;
exports.default = parallel(css, javascript, imagenes, versionWebp, watchArchivos);