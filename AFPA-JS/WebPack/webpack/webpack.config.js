const {resolve} = require("path");
const webpack = require("webpack");
const ExtractTextPlugin = require("extract-text-webpack-plugin");
const HtmlWebpackPlugin = require("html-webpack-plugin");

module.exports = function (env) {

    var prod = env !== undefined && env.procution === true;
    var dev = env !== undefined && env.procution === true;

    return {
        // entry:"./src/js/app.js",
        entry: {
            vendors: ["jquery"],
            app: "./src/js/app.js"
        }
        ,
        output: {
            publicPath: dev ? "/dist/" : "",
            path:
                resolve(__dirname, "dist"),
            // filename: "bundle.js"
            filename:
                "[name].js"
        }
        ,
        optimization: {
            splitChunks: {
                cacheGroups: {
                    commons: {
                        name: 'vendor'
                    }
                }
            }
        },
        devtool: prod ? "source-map" : "cheap-module-eval-source-map",
        module: {
            rules: [
                {
                    test: /\.js$/,
                    exclude: /node_modules/,
                    use: {
                        loader: "babel-loader",
                        options: {
                            presets: ["@babel/preset-env"],
                            //plugins: ["@babel/syntax-dynamic-import"]
                        }
                    }
                },
                {
                    test: /\.hbs$/,
                    exclude: /node_modules/,
                    use: {
                        loader: "handlebars-loader"
                    }
                },
                {
                    test: /\.s[ac]ss$/i,
                    // use: [
                    //     {loader: 'style-loader'},
                    //     {loader: 'css-loader'},
                    //     {loader: 'sass-loader'}
                    // ],
                    use: ExtractTextPlugin.extract({
                        fallback: "style-loader",
                        use: "css-loader!sass-loader"
                    })
                },
                // {
                //     test: /\.(png|jpeg|gif|svg|eot|ttf|woff|woff2)$/,
                //     use: {
                //         loader: "file-loader"
                //     }
                // }
                {
                    test: /\.(png|jpeg|gif|svg|eot|ttf|woff|woff2)$/,
                    use: {
                        loader: "url-loader",
                        options: {
                            limit: 10000,
                            name: "[name].[ext]"
                        }
                    }
                }
            ]
        }
        ,
        plugins:[
            new ExtractTextPlugin("main.css"),
            new HtmlWebpackPlugin({
                template: "./src/index.html"
            }),
            new webpack.optimize.CommonsChunkPlugin({
                name: "vendors"
            }),
            new webpack.ProvidePlugin({
                $: "jquery",
                jQuery: "jquery"
            })
        ]
    }
};



