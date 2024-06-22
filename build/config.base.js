const webpack = require('webpack')
const path = require('path')
const { SRC, DIST } = require('./paths')

module.exports = {
    entry: {
        scripts: path.resolve(SRC, 'js', 'index.js')
    },
    output: {
        // Put all the bundled stuff in your dist folder
        path: path.resolve(DIST, 'js'),

        // Our single entry point from above will be named "scripts.js"
        filename: '[name].js',
    },
    module: {
        rules: [
            // any other rules
            {
                // Exposes jQuery for use outside Webpack build
                test: require.resolve('jquery'),
                use: [{
                    loader: 'expose-loader',
                    options: { exposes: ["$", "jQuery"]}
                    }]
            },
            {
                // Exposes lightGallery for use outside Webpack build
                test: require.resolve('lightgallery'),
                use: [{
                    loader: 'expose-loader',
                    options: { exposes: "lightGallery"}
                    }]
            }
        ]
    },
    plugins: [
        // Provides jQuery for other JS bundled with Webpack
        new webpack.ProvidePlugin({
            $: 'jquery',
            jQuery: 'jquery'
        })
    ]
}