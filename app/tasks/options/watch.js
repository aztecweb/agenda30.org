/**
 * Watch for changes for files and execute an execute a task
 */
module.exports = {
	livereload: {
		files: ['<%= config.template.build %>/**/*', 'src/**/*'],
		options: {
			livereload: true
		}
	},
	images: {
		files: ['<%= config.assets.src %>/images/**/*.{png,jpg,gif,svg}'],
		tasks: ['imagemin']
	},
	stylus: {
		files: ['.stylintrc', '<%= config.assets.src %>/stylus/**/*.styl'],
		tasks: ['stylint', 'stylus:dev']
	},
	icons: {
		files: ['<%= config.assets.src %>/icons/**/*'],
		tasks: ['stylus:dev', 'symlink:icons']
	},
	js: {
		files: ['<%= config.assets.src %>/theme/js/**/*.js'],
		tasks: ['sync:requirejs']
	},
	bower: {
		files: ['bower_components/**/*'],
		tasks: ['bower:dev']
	},
	config: {
		files: ['<%= config.config.dir %>/**/*'],
		tasks: ['symlink']
	}
};
