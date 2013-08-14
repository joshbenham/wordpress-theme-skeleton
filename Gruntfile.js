(function () {
  'use strict';

  module.exports = function(grunt) {

    grunt.initConfig({
      pkg: grunt.file.readJSON('package.json'),
      jsfiles: [
        'foundation/js/vendor/jquery.js',
        'foundation/js/foundation/foundation.js',
        'js/main.js'
      ],


      /* CSS COMPONENT ------------------------------------------------ */


      compass: {
        dist: {
          options: {
            config: 'config.rb',
            specify: 'style.scss',
            trace: true
          }
        }
      },


      /* JS COMPONENT ------------------------------------------------- */


      jshint: {
        all: ['Gruntfile.js', 'js/main.js'],
        options: { jshintrc: '.jshintrc' }
      },
      concat: {
        dist: {
          src: '<%= jsfiles %>',
          dest: 'js/scripts.js'
        }
      },
      uglify: {
        options:{
          mangle: true
        },
        js: {
          src: 'js/scripts.js',
          dest:'js/scripts.min.js'
        }
      },


      /* WATCH COMPONENT ---------------------------------------------- */


      watch: {
        scripts: {
          files: '<%= jsfiles %>',
          tasks: ['jshint', 'concat', 'uglify']
        },
        css: {
          files: '<%= compass.dist.options.specify %>',
          tasks: ['compass']
        }
      }
    });

    // Load plugins.
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');

    // Default task.
    grunt.registerTask('default', ['jshint', 'concat', 'uglify', 'compass']);

  };

}());
