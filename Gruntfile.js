module.exports = function(grunt) {

    grunt.initConfig({

        pkg: grunt.file.readJSON('package.json'),

        cssmin: {
            dist: {
                options: {
                    sourceMap: true
                },
                files: {
                    'assets/css/style.min.css': ['bower_components/bootstrap/dist/css/bootstrap.css',
                        'assets/css/partials/*.css']
                }
            }
        },

        uglify: {
            dist: {
                options: {
                    sourceMap: true
                },
                files: {
                    'assets/js/script.min.js': ['bower_components/jquery/dist/jquery.js',
                        'bower_components/bootstrap/dist/js/bootstrap.js',
                        'assets/js/partials/*.js']
                }
            }
        },

        watch: {
            styles: {
                files: ['assets/css/partials/*.css'],
                tasks: ['cssmin']
            },
            scripts: {
                files: ['assets/js/partials/*.js'],
                tasks: ['uglify'],
                options: {
                    spawn: false
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-uglify');

    grunt.registerTask('default', ['watch']);
};
