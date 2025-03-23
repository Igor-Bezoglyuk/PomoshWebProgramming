let project_folder = "dist"; //папка где будет собиратся наш проект
//let project_folder = require("path").basename(__dirname); //папка будит с именем папки проекта которй вы придумаите (project-gulp)
let source_folder = "src"; // папка снашими исходными файлами проекта

let path = { //переменая которая даёт путь к файлам для обработки
    build:{ //комада которая собирает файлы по пути в папку сборки dist
        html: project_folder + "/",
        css: project_folder + "/css/",
        js: project_folder + "/js/",
        img: project_folder + "/img/",
    },
    src:{ //комада которая обрабатывает файлы в папке  исходниками
        html: [ source_folder + "/*.html", "!" + source_folder + "/_*.html"],
        css: source_folder + "/sass/style.scss",
        js: source_folder + "/js/script.js",
        img: source_folder + "/img/**/*.{jpg,png,gif,svg,ico,webp}", //Запись /**/*. означает   обработку всех под папок и папок в этом пути только с отдельными файлами которые вы укажите 
    },
    watch:{ //комада которая следит (смотрит) за обработкой
        html: source_folder + "/**/*.html",
        css: source_folder + "/sass/**/*.scss",
        js: source_folder + "/js/**/*.js",
        img: source_folder + "/img/**/*.{jpg,png,gif,svg,ico,webp}",
    },
    clear: "./" + project_folder + "/" //отвичает за удадение папки сборки проекта каждый раз когда запускается gulp
}

let {src,dest} = require ('gulp'), //переменая помогает устанввливать плагины , создавая ниже для них переменные и подключая
gulp = require ('gulp'), // список плагинов которые ты устанавливаешь в gulp , пишеттся  слитное название плагина потом в скобках название через тире
browsersync = require("browser-sync") .create(), //Плагин для обновления страницы после изменений в файле и сохранения, перезапуска gulp
fileinclude = require("gulp-file-include"), //этот плагин обьединяет два файла html в один например header,footer, с index
del = require("del"), //удаляет папку dist папку сборки проекта, вместе с ней  лишние файлы,после запуска gulp  папка dist появится  вновь собирётся.
scss = require('gulp-sass')(require('sass')), // плагин обрабатывает файл sass/scss и генерирует файл сss в папке dist, без программы препроцесоров
autoprefixer = require("gulp-autoprefixer"), //этот плагин будит автоматически создавать в sass/scss/css/ файлах префексы ко всем браузерам
group_media = require("gulp-group-css-media-queries"), //плагин групирует media запросы написаные вложенно в sass в css, 
clean_css = require("gulp-clean-css"), // плагин чистит и сжимает css файл  при запуске gulp, для аптимизации сайта и быстрой работы
rename = require("gulp-rename"), // при помощи этого файла gulp может создавать 2 css файла  один сжатый для браузера , другой не сжатый для заказщика
uglify = require("gulp-uglify-es").default, //плагин для сжатия и оптимизации javascript файлов
imagemin = require("gulp-imagemin"), //плагин  который сжимает изображение автоматически без потери качества.
webp = require("gulp-webp"), //плагин который добовляет авто. расширение для всех изображенией webp  
webphtml = require("gulp-webp-html"), //плагин который создаёт тег с форматом изображения webp рядом с тегом <img> 
webpcss = require("gulp-webpcss"); //плагин автоматически создаёт стили background с встроеный расширением  изображений, создаёт их в конце файла css
way2enjoy = require('way2enjoy-gulp');

function browserSync(){ // функция browserSync позволяет обновлять браузер автомотически  если вы  совершиле изменения  в  любом фале проекта и сохранили их
    browsersync.init({
        server:{// настройка сервера
            baseDir:"./" + project_folder + "/" //указываем базываю нашего проекта
        },
        port:3000,// порт по которому открывается браузер
        notify:false //запретить плагину отображать таблицу с характеристиками после каждого  обновления страницы
    })
}

function html(){ // функция html подключает к себе плагины которые взаимодействуют с html документом
    return src(path.src.html)
      .pipe(fileinclude())//обьединяет одинаковые по расширениям файлы в один
      .pipe(webphtml()) // добавляет рядом с тегом img   скрытые  теги  изображений с форматом webp
      .pipe(dest(path.build.html)) //путь к html в папку собирающемся проектом 
      .pipe(browsersync.stream()) //перезапуск html страницы
}

function css(){ // функция сss подключает к себе плагины которые взаимодействуют с сss документом, улучшают работу с sass препроцесором
    return src(path.src.css)
      .pipe(scss({outputStyle: "expanded"})) // формирует css файл  через sass
      .pipe(autoprefixer({overrideBrowserslist:["last 5 versions"], cascade: true}))// добавляют авто. префиксы в файлы стилей для всех браузеров
      .pipe(group_media()) //групируют медиа запросы в низу файла стилей
      .pipe(webpcss())// добавляет webp расширение для всех изображений в низу файла стилей
      .pipe(dest(path.build.css)) // ввыгружает не сжатый, собраный css файл в папку dist
      .pipe(clean_css())// чистит и сжимает  файл стилей css
      .pipe(rename({extname:".min.css"}))// миняет название сжатого файла css
      .pipe(dest(path.build.css)) // ввыгружает сжатый  css файл в папку dist
      .pipe(browsersync.stream()) //перезагружает страницу после действий
}

function js(){ // функция js подключает к себе плагины которые взаимодействуют с js документом
    return src(path.src.js)
      .pipe(fileinclude())//обьединяет одинаковые по расширениям файла в один
      .pipe(dest(path.build.js))// собирает файлы в один и выгружает по пути в папку dist
      .pipe(uglify())//сжимает и оптемизирует файлы js
      .pipe(rename({extname:".min.js"}))// переминовывают сжатый файл js
      .pipe(dest(path.build.js))// выгружает сжатый файл js в папку dist
      .pipe(browsersync.stream())// перезагрузка браузера после действий
}

function img(){ // функция img подключает к себе плагины которые взаимодействуют с img  файлами изображений
    return src(path.src.img)
      .pipe(webp({quality:70}))// изображения в папке img  создаётся копия с расширением webp
      .pipe(dest(path.build.img))//выгружает изображения в папку dist
      .pipe(src(path.src.img))//заходит в папку с проектом с исходными файлами src, к изображениям
      .pipe(imagemin({//  уменьшает  размер изображения без потери качиства
        progressive: true,
        svgoPlugins: [{removeViewBox:false}],
        interlaced: true,
        optimizationLevel:3 //0 do 7
      }))
      .pipe(dest(path.build.img))//выгружает сжатые картинки в папку dist
      .pipe(browsersync.stream())// перезагрузка браузера после действий
}

function watchFiles(){ //функция  позволяющая отслеживать gulp, пути к файлом и сами файлы
    gulp.watch([path.watch.html], html);
    gulp.watch([path.watch.css], css);
    gulp.watch([path.watch.js], js);
    gulp.watch([path.watch.img], img);
}

function clear(){ //функция удаляет папку dist  и лишние файлы в ней , которую собирает gulp , после каждого запуска gulp
    return del(path.clear);
}

let build = gulp.series(clear, gulp.parallel(js, css, html, img)); //подключение к gulp  переменных функций  к пути сборки проекта, и включает в процесс
let watch = gulp.parallel(build, watchFiles, browserSync); // переменая которая  наблюдает за конструкцией  

exports.img = img; //подключение к gulp  переменных функций 
exports.js = js;
exports.css = css;
exports.html = html;
exports.build = build;
exports.watch = watch;
exports.default = watch;
