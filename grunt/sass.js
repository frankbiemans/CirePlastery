module.exports = {
	dist: {
		files: {
			'<%= themedir %>/style.css': '<%= themedir %>/stylesheets/site.sass'
		}
	},
	backend: {
		files: {
			'<%= themedir %>/editor-style.css': '<%= themedir %>/editor-style.sass'
		}
	},
	bootstrap: {
		files: {
			'node_modules/bootstrap/scss/bootstrap-custom.css': 'node_modules/bootstrap/scss/bootstrap-custom.scss'
		}
	},
	editor: {
		files: {
			'<%= themedir %>/editor-style.css': '<%= themedir %>/editor-style.sass'
		}
	}
};