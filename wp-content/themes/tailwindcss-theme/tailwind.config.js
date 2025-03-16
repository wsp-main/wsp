const theme = require('./theme.json');
const tailpress = require("@jeffreyvr/tailwindcss-tailpress");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './*.php',
        './**/*.php',
        './resources/css/*.css',
        './resources/js/*.js',
        './safelist.txt'
    ],
    theme: {
        container: {
            padding: {
                DEFAULT: '1rem',
                sm: '2rem',
                lg: '1rem'
            },
        },
        extend: {
            colors: {
                ...tailpress.colorMapper(tailpress.theme('settings.color.palette', theme)),
            },
            fontSize: {
                ...tailpress.fontSizeMapper(tailpress.theme('settings.typography.fontSizes', theme)),
            },
            fontFamily: {
                zen: ['Zen Maru Gothic', 'sans-serif'],
            },
        },
        screens: {
            'xs': '600px',
            'sm': '768px',
            'md': '960px',
            'lg': tailpress.theme('settings.layout.contentSize', theme),
            'xl': tailpress.theme('settings.layout.wideSize', theme)
        },
        fontFamily: {
            sans: ['"游ゴシック体"', 'YuGothic', '"メイリオ"', 'Meiryo', 'sans-serif'],
            serif: ['"游明朝体"', 'YuMincho', '"ヒラギノ明朝 ProN"', 'Hiragino Mincho ProN', 'serif'],
            mono: ['"游ゴシック等幅"', 'YuGothic Mono', '"MS ゴシック"', 'MS Gothic', 'monospace'],
        },
        backgroundImage: {
            'custom-gradient': 'linear-gradient(90deg, rgba(61,39,132,1) 0%, rgba(83,127,245,1) 95%)',
            'hover-custom-gradient': 'linear-gradient(120deg, #f6d365 0%, #fda085 100%)',
        },
        backgroundSize: {
            'auto': 'auto',
            'cover': 'cover',
            'contain': 'contain',
            'shalf': '60% 60%',
            'sfull': '100% 100%',
        },
    },
    plugins: [
        tailpress.tailwind
    ]
};
