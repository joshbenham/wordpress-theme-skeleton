'use strict';

module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    jshint: {
      options: {
        curly: true,
        eqeqeq: true,
        immed: true,
        latedef: true,
        newcap: true,
        noarg: true,
        sub: true,
        undef: true,
        boss: true,
        eqnull: true,
        jquery: true,
        devel: true,
        browser: true
      },
      globals: {}
    },
    concat: {
      dist: {
        src: [
          'foundation/js/vendor/jquery.js',
          'foundation/js/foundation/foundation.js',
          'js/main.js'
        ],
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
    compass: {
      dist: {
        options: {
          config: 'config.rb',
          specify: 'style.scss',
          trace: true
        }
      }
    },
    watch: {
      scripts: {
        files: '<%= concat.dist.src %>',
        tasks: ['concat', 'uglify']
      },
      css: {
        files: '<%= compass.dist.options.specify %>',
        tasks: ['compass']
      }
    }
  });

  // Load plugins.
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');

  // Default task.
  grunt.registerTask('default', ['concat', 'uglify', 'compass']);

};
