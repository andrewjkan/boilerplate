module.exports = function(grunt) {
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-autoprefixer');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-compass');
	grunt.loadNpmTasks('grunt-contrib-jshint');

	grunt.initConfig({
		uglify: {
			my_target: {
				files: {
					'www/js/main.min.js': ['_/components/js/*.js']
				}
			}
		}, // END uglify
		compass : {
			dev: {
				options : {
					config : 'config.rb'
				}
			}
		}, // END compass
		autoprefixer: {
            dist: {
                files: {
                    'www/css/main.min.css': 'www/css/main.min.css'
                }
            }
        }, // END autoprefixer
		watch: {
			options: { livereload: true },
			scripts : {
				files: ['_/components/js/*.js'],
				tasks: ['uglify','jshint']
			},
			sass : {
				files: ['_/components/sass/*.scss'],
				tasks: ['compass:dev','autoprefixer']
			},
			html_main : {
				files: ['www/*.html']
			},
			html_partial : {
				files: ['www/partials/*.html']
			},
			php_main: {
				files: ['www/*.php']
			},
			php_include: {
				files: ['www/includes/*.php']
			}
		}, // END watch
		jshint: {
		    all: ['_/components/js/*.js'],
	  	}, // END jshint
	}) // END initConfig

	grunt.registerTask('default','watch');
}