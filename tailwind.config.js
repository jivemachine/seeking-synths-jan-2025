import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                helvetica: ['Helvetica', 'sans-serif'],
            },
            fontSize: {
                '6xl': ['3.75rem', { lineHeight: '4.3119rem' }],
                '4xl': ['2rem', { lineHeight: '2.3rem' }],
                'xl': ['1.25rem', { lineHeight: '1.4375rem' }],
            },
            maxWidth: {
                '2xl': '606px',
                '3xl': '891px',
                'screen-xl': '1440px',
            },
        },
    },
    plugins: [],
};
