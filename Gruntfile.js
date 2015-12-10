module.exports = function(grunt) {

    grunt.initConfig({

        pkg: grunt.file.readJSON('package.json'),

        sass: {
            dist: {
                options: {
                    style: 'expanded'
                },
                files: {
                    'assets/css/style.css': ['assets/sass/main.scss']
                }
            }
        },

        cssmin: {
            dist: {
                options: {
                    keepSpecialComments: 0,
                    sourceMap: true
                },
                files: {
                    'assets/css/style.min.css': ['bower_components/bootstrap/dist/css/bootstrap.css',
                        'assets/css/style.css']
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
                        'assets/js/vendor/*.js',
                        'assets/js/partials/*.js']
                }
            }
        },

        watch: {
            sass: {
                files: ['assets/sass/**/*.scss'],
                tasks: ['sass']
            },
            styles: {
                files: ['assets/css/style.css'],
                tasks: ['cssmin']
            },
            scripts: {
                files: ['assets/js/**/*.js'],
                tasks: ['uglify'],
                options: {
                    spawn: false
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-uglify');

    grunt.registerTask('default', ['watch']);
};
