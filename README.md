# _bourbon 2.0.1

_bourbon is a blank child theme for [_dash](https://github.com/marcelbadua/_dash), you need to have _dash also installed. _bourbon uses [Gulp.js](https://gulpjs.com/) as its automated workflow to compile its styles and scripts. It uses [Bourbon](https://www.bourbon.io/) as it's SASS toolset. 

## Theme folder Structure

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

## Prerequistes

1. A local server to build your theme (MAMP, WAMP, XAMPP, Vagrant)
1. Gulp is a command line tool, so you should be familiar working in terminal. In order to use Gulp you need to have [Node.js](https://nodejs.org/en/) installed on your system.


## Commands

Compile styles

      gulp styles

Compile scripts

      gulp scripts

To start a localhost and monitors dev file chnges (for working seamingly while editing and refreshing browser)

      gulp serve
      
## Reads

1. WordPress Pre-Built vs. Custom Theme - http://lumina.nyc/wordpress-pre-built-vs-custom-theme/

---

If you like and using this plugin, feel free to send me a hi, I would really appreciate that.

 - [Twitter](https://twitter.com/marcelbadua)
 - [marcelbadua](http://marcelbadua.com/)
