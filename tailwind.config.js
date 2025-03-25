const defaults = require('tailwindcss/defaultTheme');

module.exports = {
    content: require('fast-glob').sync([
        'source/**/*.html',
        'source/**/*.md',
        'source/**/*.js',
        'source/**/*.php',
        'source/**/*.vue',
    ]),
    options: {
        safelist: [/language/, /hljs/, /mce/],
    },
    theme: {
        extend: {
            fontFamily: {
                instrument: ["Instrument Sans", "sans-serif"],
                poppins: ["Poppins", "sans-serif"],
            },
            colors: {
                'secondary': '#F3EEEE',
            },
        },
    },
};
