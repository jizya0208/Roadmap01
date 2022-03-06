const webpack = require("webpack");
const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const FixStyleOnlyEntriesPlugin = require("webpack-fix-style-only-entries");
const { CleanWebpackPlugin } = require("clean-webpack-plugin");
const { default: DevServer } = require("next/dist/server/dev/next-dev-server");
const BrowserSyncPlugin = require("browser-sync-webpack-plugin");

module.exports = {
  // コンパイルモード
  mode: "production",
  // エントリーポイントの設定
  entry: "./src/js/index.js",
  // ビルド後、'./dist/my-bundle.js'というbundleファイルを生成する
  output: {
    path: path.resolve(__dirname, "src/dist"),
    filename: "bundle.js",
  },
  module: {
    rules: [
      // sassのコンパイル設定
      {
        test: /\.(sa|sc|c)ss$/, // 対象にするファイルを指定
        use: [
          MiniCssExtractPlugin.loader, // JSとCSSを別々に出力する
          "css-loader",
          "postcss-loader", // オプションはpostcss.config.jsで指定
          "sass-loader",
          // 下から順にコンパイル処理が実行されるので、記入順序に注意
        ],
      },
    ],
  },
  plugins: [
    new FixStyleOnlyEntriesPlugin(), // CSS別出力時の不要JSファイルを削除
    new MiniCssExtractPlugin({
      // CSSの出力先
      filename: "style.css", // 出力ファイル名を相対パスで指定（[name]にはentry:で指定したキーが入る）
    }),
    new BrowserSyncPlugin({
      host: "localhost",
      port: 8001,
      proxy: "http://localhost:8000",
    }),
  ],
  // node_modules を監視（watch）対象から除外
  watchOptions: {
    ignored: /node_modules/,
  },
  devServer: {
    static: {
      directory: path.join(__dirname, "src"),
    },
    watchFiles: ["src/**/*"],
    open: true,
    hot: true,
  },
  watch: true,
};
