(function () {
  'use strict';

  module.exports = function(grunt) {

    grunt.initConfig({
      pkg: grunt.file.readJSON('package.json'),
      scripts: [
        'foundation/js/vendor/jquery.js',
        'foundation/js/foundation/foundation.js',
        'foundation/js/foundation/foundation.section.js',
        'js/main.js'
      ],
      images: [
        'images/**/*.png',
        'images/**/*.jpg'
      ],
      scss: [
        'style.scss',
        'foundation/scss/**/*.scss',
        'scss/**/*.scss'
      ],


      /* CSS COMPONENT ---------------------------------------------- */


      compass: {
        dist: {
          options: {
            httpPath: '/',
            cssDir: '',
            sassDir: '',
            imagesDir: 'images',
            javascriptsDir: 'js',
            specify: 'style.scss',
            outputStyle: 'compress',
            trace: true
          }
        }
      },


      /* JS COMPONENT ----------------------------------------------- */


      jshint: {
        all: ['Gruntfile.js', 'js/main.js'],
        options: {
          boss: true,
          browser: true,
          curly: true,
          eqeqeq: true,
          eqnull: true,
          immed: true,
          jquery: true,
          latedef: true,
          newcap: true,
          noarg: true,
          quotmark: true,
          sub: true,
          undef: true,
          globals: {
            module: true
          }
        }
      },
      concat: {
        dist: {
          src: '<%= scripts %>',
          dest: 'js/main.min.js'
        }
      },
      uglify: {
        options:{
          mangle: true
        },
        js: {
          src: 'js/main.min.js',
          dest:'js/main.min.js'
        }
      },


      /* WATCH COMPONENT -------------------------------------------- */


      watch: {
        scripts: {
          files: '<%= scripts %>',
          tasks: ['jshint', 'concat', 'uglify']
        },
        css: {
          files: '<%= scss %>',
          tasks: ['compass']
        },
      }
    });

    // Load plugins.
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');

    // Default task.
    grunt.registerTask('default', ['jshint', 'concat', 'uglify', 'compass']);

  };

}());
