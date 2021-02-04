// webpack.mix.js

let mix = require('laravel-mix');	

/* Prende Laravel Mix e lo salva all’interno della variabile mix */

mix
.sass("src/style.scss", "css")
.js('src/main.js', 'js')
.setPublicPath('dist');
