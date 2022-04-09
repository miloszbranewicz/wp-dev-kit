
const path = require("path");

const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const FileManagerPlugin = require('filemanager-webpack-plugin');

const isProduction = process.env.NODE_ENV == "production";

const stylesHandler = MiniCssExtractPlugin.loader;

const config = {
  entry: ["./src/js/script.js", "./src/scss/main.scss"],
  output: {
    path: path.resolve(__dirname, "dist"),
  },
  // devServer: {
  //   open: true,
  //   host: "mario.etaptestowy.co.pl",
  //   port: 3000
  // },
  plugins: [
    new MiniCssExtractPlugin(),
    new FileManagerPlugin({
      events: {
        onEnd: {
          copy: [
            { source: './dist/main.js', destination: './assets/js/' },
            { source: './dist/main.css', destination: './assets/css/' }
          ]
        }
      }
    }),

    // Add your plugins here
  ],
  module: {
    rules: [
      {
        test: /\.(js|jsx)$/i,
        loader: "babel-loader",
      },
      {
        test: /\.s[ac]ss$/i,
        use: [stylesHandler, "css-loader", "postcss-loader", "sass-loader"],
      },
      {
        test: /\.css$/i,
        use: [stylesHandler, "css-loader", "postcss-loader"],
      },
      {
        test: /\.(eot|svg|ttf|woff|woff2|png|jpg|gif)$/i,
        type: "asset",
      },

      // Add your rules for custom modules here

    ],
  },
};

module.exports = () => {
  if (isProduction) {
    config.mode = "production";
  } else {
    config.mode = "development";
  }
  return config;
};
