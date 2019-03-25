const path = require('path');

module.exports = {
    // We define an entry point for webpack to start crawling
    entry: './src/index.js',
    // Then we define where the files webpack produce will be placed
    output: {
        filename: 'main.js',
        path: path.resolve(__dirname, 'dist')
    },
    // We also define mode in which files are getting bundled (development / production)
    mode: 'production',
    module: {
        rules: [
            {
                test: /\.less$/,
                use: [{
                    loader: 'style-loader' // creates style nodes from JS strings
                }, {
                    loader: 'css-loader' // translates CSS into CommonJS
                }, {
                    loader: 'less-loader' // compiles Less to CSS
                }]
            },
            {
                test: /\.css$/,
                use: [{
                    loader: 'style-loader' // creates style nodes from JS strings
                }, {
                    loader: 'css-loader' // translates CSS into CommonJS
                }]
            }
            ]
    }
};