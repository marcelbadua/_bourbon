# _bourbon 2.0.1

**_bourbon** is a blank child theme for [_dash](https://github.com/marcelbadua/_dash), you need to have **_dash** also installed. **_bourbon** uses [Gulp.js](https://gulpjs.com/) as its automated workflow to compile its styles and scripts. It uses [Bourbon](https://www.bourbon.io/) as it's SASS toolset. 

## Theme Folder Structure

      +-- gulpfile.js   # gulp.js tasks
      +-- dev     # contains development codes needed to compile assets
      |     +-- scripts
      |     +-- scss   # SASS files
            |     +-- _variables.scss    # global variables to be used (color, spacing, font, transitions)
            |     +-- styles.scss    # main SASSS file
      +-- dist    # compiled files/assets used by the theme
      |     +-- css
      |     +-- js
      |     +-- img

## Library & Frameworks Used

1. npm
1. gulp
1. browser-sync
1. gulp-concat
1. gulp-cssmin
1. gulp-imagemin
1. gulp-jquery-closure
1. gulp-load-plugins
1. gulp-markdown-docs
1. gulp-notify
1. gulp-plumber
1. gulp-sass
1. gulp-uglify
1. gulp-util
1. node-bourbon
1. node-normalize-scss

## Prerequistes

1. A local server to build your theme (MAMP, WAMP, XAMPP, Vagrant) - its best pracice to work on a local copy/clone of your website.
1. Gulp is a command line tool, so you should be familiar working in terminal. In order to use Gulp you need to have [Node.js](https://nodejs.org/en/) installed on your system.
1. Globally install Gulp `npm install gulp-cli -g`
1. Install NPM dependencies under _bourbon folder `npm install`

## Commands

On your terminal, go to the _bourbon folder.

 - `gulp styles` - To compile styles 
 - `gulp scripts` - To compile scripts 
 - `gulp serve` - To start a localhost and monitors dev file chnges (for working seamingly while editing and refreshing browser)
      
## Reads

1. WordPress Pre-Built vs. Custom Theme - http://lumina.nyc/wordpress-pre-built-vs-custom-theme/
1. Gulp, SASS, Bourbon, Neat & BrowserSync Boilerplate - http://meredithunderell.com/gulp-sass-bourbon-neat-browsersync-boilerplate/

---

If you like and using this plugin, feel free to send me a hi, I would really appreciate that.

 - [Twitter](https://twitter.com/marcelbadua)
 - [marcelbadua](http://marcelbadua.com/)
