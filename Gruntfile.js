module.exports = function(grunt) {
    require('load-grunt-config')(grunt, {
        data: {
            demositedir: 'CirePlastery',
            themedirname: 'cireplastery',
            themesdir: 'build/wp-content/themes/',
            themedir: '<%= themesdir %><%= themedirname %>',
            port: 5321,
        }
    });
};
