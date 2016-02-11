module.exports = function(grunt) {
	grunt.initConfig({

		concat 		: { //task name: use cmd 'grunt concat' in terminal to excecute
			options	: {
				seperator: '\n\n//-----------------------------------------\n',
				banner: '\n\n//---------------------------------------------\n'
			},
			dist	: {
				src	: ['components/scripts/*.js'],//all js scripts in folder
				dest: 'js/script.js'
			}
		}, //concat

		sass 		: {
			dist	: {
				options : {
					style: 'compressed'
				},
				files	: {
					'css/style.css': 'components/sass/style.scss',
					'includes/resources/bootstrap/css/bootstrap.min.css': 'includes/resources/bootstrap/css/bootstrap.scss'
				}
			}
		}, //sass


		watch 		: {
			options	: {
				livereload: 35729
			},
			scripts: {
					files: ['**/*.php',
					'components/scripts/**/*.js',
					'**/*.scss'],
					tasks: ['concat', 'sass']
			}
		} //watch

	}); //initConfig function

	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-sass');
	// grunt.loadNpmTasks('grunt-contrib-connect');
	grunt.loadNpmTasks('grunt-bower-concat');
	grunt.loadNpmTasks('grunt-wiredep');
	grunt.loadNpmTasks('grunt-contrib-watch');


	grunt.registerTask('default', [ 'sass', 'concat', 'watch']); //shortcut: use cmd 'grunt' in terminal to run tasks listed

};// wrapper function