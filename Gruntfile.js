module.exports = function(grunt) {
 
  // configure the tasks
  grunt.initConfig({
  
    copy: {
      build: {
        cwd: 'src',
        src: [ '**', '!**/*.styl'],
        dest: 'build',
        expand: true
      },
    },
 
    clean: {
      build: {
        src: [ 'build' ]
      },
      stylesheets: {
        src: [ 'build/**/*.css', '!build/app.css']
      },
      scripts: {
        src: [ 'build/**/*.js', '!build/main.js']
      },
    },
 
    stylus: {
      build: {
        options: {
          linenos: true,
          compress: false
        },
        files: [{
          expand: true,
          cwd: 'src',
          src: [ '**/*.styl' ],
          dest: 'build',
          ext: '.css'
        }]
      }
    },
 
    autoprefixer: {
      build: {
        expand: true,
        cwd: 'build',
        src: [ '**/*.css' ],
        dest: 'build'
      }
    },
 
    cssmin: {
      build: {
        files: {
          'build/app.css': [ 'build/**/*.css' ]
        }
      }
    },

    uglify: {
      build: {
        options: {
          mangle: false
        },
        files: {
          'build/main.js': [ 'build/**/*.js' ]
        }
      }
    },
 
    watch: {
      stylesheets: {
        files: 'src/**/*.styl',
        tasks: [ 'stylesheets' ]
      },
      scripts: {
        files: 'source/**/*.js',
        tasks: [ 'scripts' ]
      },
      copy: {
        files: [ 'source/**', '!source/**/*.styl'],
        tasks: [ 'copy' ]
      }
    },
 
    connect: {
      server: {
        options: {
          port: 4000,
          base: 'build',
          hostname: '*'
        }
      }
    }
 
  });
 
  // load the tasks
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-stylus');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-connect');
  grunt.registerTask('heroku:production', 'clean mincss uglify');
 
  // define the tasks
  grunt.registerTask(
    'stylesheets', 
    'Compiles the stylesheets.', 
    [ 'stylus', 'autoprefixer', 'cssmin', 'clean:stylesheets' ]
  );
 
  grunt.registerTask(
    'scripts', 
    'Compiles the JavaScript files.', 
    [ 'uglify', 'clean:scripts' ]
  );
 
  grunt.registerTask(
    'build', 
    'Compiles all of the assets and copies the files to the build directory.', 
    [ 'clean:build', 'copy', 'stylesheets', 'scripts']
  );
 
  grunt.registerTask(
    'default', 
    'Watches the project for changes, automatically builds them and runs a server.', 
    [ 'build', 'connect', 'watch' ]
  );
};