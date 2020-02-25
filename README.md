
# Starter WP Theme

Starter files for generate wordpress theme to integrate after finish sections.

## Getting started

Gulp helps you to automated task for generate CSS and JS files fron SASS. Run it:
Clone git repository, download or use degit

    !! git clone https://github.com/bssanchez/starter-wp-theme.git
    !! degit github:bssanchez/starter-wp-theme my-theme
    cd my-theme
    npm install
    gulp

## Generate node_modules for deploy

    rm -rf node_modules
    npm install --production

## Third part libraries

- Bootstrap ^4.3.1
- jQuery ^3.4.1
- @fortawesome/fontawesome-free ^5.11.2
- popper.js ^1.15.0 (required by bootstrap)

## Third part libraries for DEV

- autoprefixer ^9.5.1,
- cssnano ^4.1.10,
- gulp ^4.0.2,
- gulp-concat ^2.6.1,
- gulp-plumber ^1.2.1,
- gulp-postcss ^8.0.0,
- gulp-sass ^4.0.2,
- gulp-sourcemaps ^2.6.5,
- gulp-uglify ^3.0.2,
- node-sass ^4.12.0