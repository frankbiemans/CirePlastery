module.exports = {
    bower_js_files: {
        files: {
            '<%= themedir %>/scripts/libraries.min.js': [
            'bower_components/jquery/dist/jquery.js',
            'bower_components/tether/dist/js/tether.js',
            'node_modules/bootstrap/dist/js/bootstrap.js',
            'bower_components/modernizr/modernizr.js',
            'bower_components/slick-carousel/slick/slick.js',
            'bower_components/waypoints/lib/jquery.waypoints.js',
            'bower_components/jquery.nicescroll/dist/jquery.nicescroll.js',
            'bower_components/jQuery-One-Page-Nav/jquery.nav.js'
            ]
        }
    },
    custom_js_files: {
        files: {
            '<%= themedir %>/scripts/functions.min.js': '<%= themedir %>/scripts/functions.js',
            '<%= themedir %>/scripts/load.min.js': '<%= themedir %>/scripts/load.js'
        }
    }
};