// This is a webpack configuration file
//
// I am using Webpack to bundle all of my Javascript and LESS / CSS files into one bundle JS file
//
// Files are processed by Webpack and outputted into /dist folder and bundled in main.js file

const path = require('path');

module.exports = {
    // We define mode in which files are getting bundled (development / production)
    mode: 'development',
    // We define an entry point for webpack to start crawling
    entry: {
        index: './src/index.js',
    },
    // Then we define where the files webpack produce will be placed
    output: {
        filename: 'main.js',
        path: path.resolve(__dirname, 'dist')
    },
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
            },
            {
                test: /\.(png|jpg)$/,
                use: [{
                    loader: 'url-loader' // loads images for Webpack
                }]
            }
            ]
    }
};