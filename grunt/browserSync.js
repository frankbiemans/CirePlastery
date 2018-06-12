module.exports = {
    bsFiles: {
        src: [
        '<%= themedir %>/style.css',
        '<%= themedir %>/**/*.min.js',
        '<%= themedir %>/*.php',
        '<%= themedir %>/**/*.php',
        '<%= themedir %>/**/poll.css'
        ]
    },
    options: {
        proxy: 'localhost:<%= port %>',
        port: '<%= port %>',
        open: true,
        watchTask: true
    }
};