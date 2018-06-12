module.exports = {
	sass: {
		files: ['<%= themedir %>/stylesheets/base.sass', '<%= themedir %>/stylesheets/media-queries.sass', '<%= themedir %>/stylesheets/template-clg.sass', '<%= themedir %>/stylesheets/theme-init.css'],
		tasks: ['render-css']
	},
	js: {
		files: ['<%= themedir %>/scripts/load.js', '<%= themedir %>/scripts/functions.js'],
		tasks: ['render-js']
	},
	backendsass: {
		files: ['<%= themedir %>/editor-style.sass'],
		tasks: ['backend-css']
	}
};