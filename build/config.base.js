const webpack = require('webpack')
const path = require('path')
const { SRC, DIST } = require('./paths')

module.exports = {
    entry: {
        scripts: path.resolve(SRC, 'js', 'index.js'),
        styles: path.resolve(SRC, 'scss', 'styles.scss')
    },
    output: {
        // Put all the bundled stuff in your dist folder
        path: path.resolve(DIST),

        // Our single entry point from above will be named "scripts.js"
        filename: 'js/[name].js',
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
            }, {
                // Exposes lightGallery for use outside Webpack build
                test: require.resolve('lightgallery'),
                use: [{
                    loader: 'expose-loader',
                    options: { exposes: "lightGallery"}
                    }]
            }, {
                // compile sass files
                test: /\.scss$/,
                exclude: /node_modules/,
                use: [
                    {
                        loader: 'file-loader',
                        options: { outputPath: 'css/', name: '[name].min.css'}
                    },
                    'sass-loader'
                ]
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