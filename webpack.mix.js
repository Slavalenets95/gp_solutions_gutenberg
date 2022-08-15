const mix = require("laravel-mix");

// require('laravel-mix-webp')
// require('laravel-mix-imagemin')


// mix.ImageWebp({
//     from: 'resources/images',
//     to: 'dist/images',
//   })

mix.js("resources/js/app.js", "dist/")
// mix.js("template-parts/blocks/**/*.js", "dist/admin/admin.js")

mix.sass("resources/scss/app.scss", "dist/");
// mix.sass("template-parts/blocks/admin.scss", "dist/admin/admin.css")
// mix.copyDirectory('resources/fonts', 'dist/fonts');
mix.options({
  processCssUrls: false,
})

mix.browserSync({
  proxy: "http://gpsolutionsgutenberg/gpsolutions/",
  port: 8001,
  files: ["./**/*.php", "./dist/**/*.*"],
});