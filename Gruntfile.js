module.exports = function (grunt) {
  'use strict'

  grunt.loadNpmTasks('grunt-contrib-watch')
  grunt.loadNpmTasks('grunt-sass')
  grunt.loadNpmTasks('grunt-standard')
  grunt.loadNpmTasks('grunt-modernizr')
  grunt.loadNpmTasks('grunt-browserify')
  grunt.loadNpmTasks('grunt-exorcise')
  grunt.loadNpmTasks('grunt-contrib-copy')
  grunt.loadNpmTasks('grunt-contrib-clean')
  grunt.loadNpmTasks('grunt-image')

  const sass = require('node-sass')

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    clean: {
      production: {
        src: [
          'static/'
        ]
      }
    },

    sass: {
      options: {
        implementation: sass,
        outputStyle: 'compressed',
        sourceMap: true,
        includePaths: [
          require('bourbon').includePaths,
          require('bourbon-neat').includePaths,
          require('node-normalize-scss').includePaths
        ]
      },
      production: {
        files: {
          'static/main.min.css': 'assets/scss/main.scss'
        }
      }
    },

    modernizr: {
      production: {
        'crawl': false,
        'customTests': [],
        'dest': 'static/lib/modernizr.min.js',
        'tests': [
          'flexbox',
          'svgasimg'
        ],
        'options': [
          'html5printshiv',
          'html5shiv',
          'setClasses'
        ],
        'uglify': true
      }
    },

    browserify: {
      options: {
        browserifyOptions: {
          debug: true
        }
      },
      production: {
        files: {
          'static/main.min.js': 'assets/js/main.js'
        }
      }
    },

    exorcise: {
      production: {
        files: {
          'static/main.min.js.map': 'static/main.min.js'
        }
      }
    },

    copy: {
      production: {
        files: {
          'static/lib/jquery.min.js': 'node_modules/jquery/dist/jquery.min.js'
        }
      }
    },

    image: {
      dynamic: {
        files: [{
          expand: true,
          cwd: 'assets/img',
          src: ['**/*.{png,jpg,gif,svg}'],
          dest: 'static/img'
        }]
      }
    },

    _watch: {
      less: {
        files: ['assets/scss/*.scss', 'assets/scss/*/*.scss'],
        tasks: ['sass']
      },
      js: {
        files: ['assets/js/*.js', 'assets/js/*/*.js'],
        tasks: ['standard', 'browserify', 'exorcise']
      }
    },

    standard: {
      production: {
        src: [
          'Gruntfile.js',
          'assets/js/main.js'
        ]
      }
    }
  })

  grunt.renameTask('watch', '_watch')

  grunt.registerTask('watch', [
    'default',
    '_watch'
  ])

  grunt.registerTask('default', [
    'clean',
    'image',
    'sass',
    'standard',
    'copy',
    'browserify',
    'exorcise',
    'modernizr'
  ])
}
