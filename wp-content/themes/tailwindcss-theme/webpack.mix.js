let mix = require('laravel-mix');
let path = require('path');
const TerserPlugin = require('terser-webpack-plugin');
const CssNanoPlugin = require('cssnano');

// 公開パスの設定
mix.setPublicPath('./');  // 同階層にビルド

// Webpackの設定
mix.webpackConfig({
    watchOptions: {
        ignored: [
            path.posix.resolve(__dirname, './node_modules'),
            path.posix.resolve(__dirname, './css'),
            path.posix.resolve(__dirname, './js')
        ]
    },
    optimization: {
        minimize: true, // JSファイルのミニファイを有効化
        minimizer: [
            new TerserPlugin({
                terserOptions: {
                    compress: {
                        drop_console: true, // console.log などを削除
                        passes: 3,          // 圧縮パスを3回に増やして最適化
                        dead_code: true,    // 使用されていないコードを削除
                        conditionals: true, // 条件分岐の最適化
                        unused: true,       // 未使用の変数や関数を削除
                        comparisons: true,  // 不必要な比較を削除
                        evaluate: true,     // 定数式の評価を行う
                        booleans: true,     // ブール式の最適化
                        loops: true,        // ループの最適化
                        hoist_funs: true,   // 関数の巻き上げを有効化
                        if_return: true,    // 不要なif/return文を削除
                    },
                    mangle: {
                        properties: true,   // プロパティ名を短縮化
                    },
                    output: {
                        comments: false,   // コメントを削除
                    },
                },
                extractComments: false,  // コメントを別ファイルにしない
            }),
        ],
    },
});

// JavaScriptファイルのビルド
mix.js('resources/js/app.js', 'js');  // JSファイルをさらに圧縮してビルド

// CSSファイルのビルド
mix.postCss('resources/css/app.css', 'css', [
    require('tailwindcss'),
    require('postcss-import'),
])
.options({
    processCssUrls: false,  // CSS内のURLをそのままにする
    postCss: [
        CssNanoPlugin({
            preset: 'default', // CSSNanoでさらに強力にミニファイ
        }),
    ]
});

// ソースマップを生成しない設定
mix.disableNotifications();  // 成功通知を無効化
mix.sourceMaps(false, 'source-map');  // ソースマップを無効化

// プロ
