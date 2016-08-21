module.exports = function() {
    var viewsRoot = '../../fuel/app/views/templates/_templates/';
    return {
        'document_root': 'http://vanarts_portfolio',
        'views_root': viewsRoot,
        'js': {
            'app': './app/js/**/*.js',
            'ignore': './app/js/vendors/**/*.js',
            'dist': './dist/js/',
            'bundled': 'bundle.js'
        },
        'css': {
            'app': './app/css/**/*.scss',
            'dist': './dist/css/'
        },
        'img': {
            'app': './app/img/**/*.+(png|jpg|gif|svg)',
            'dist': './dist/img/'
        },
        'html': {
            'app': [viewsRoot + 'header.php', viewsRoot + 'footer.php'],
            'dist': '../../fuel/app/views/templates/'
        },
        'fonts': {
            'app': './app/fonts/**/*',
            'dist': './dist/fonts/'
        } 
    };
};