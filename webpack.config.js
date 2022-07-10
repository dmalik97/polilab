/*module.exports = {
    entry: "./assets/js/src/header.js",
    output: {
        path: ${__dirname}/dist/js,
        filename: "bundle.min.js"
    },
    watch: false,
    mode: "production",
    devtool: "source-map",
    module: {
        rules: [
            {
                test: /\.m?js$/,
                exclude: /(node_modules|bower_components)/,
                use: {
                    loader: "babel-loader",
                    options: {
                        presets: ["@babel/preset-env"]
                    }
                }
            }
        ]
    }
}*/
module.exports = {
    output: {
        filename: 'bundle.js',
    },
    module: {
        rules: [
            {
                test: /\.(js|jsx)$/,
                exclude: /(node_modules)/,
                loader: 'babel-loader',
                /*query: {
                    presets: [
                        ['latest', { modules: false }],
                    ],
                },*/
            },
        ],
    },
};
