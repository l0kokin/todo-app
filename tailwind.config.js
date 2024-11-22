import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Helvetica', 'Arial', ...defaultTheme.fontFamily.sans],},
            colors: {
                'gray': 'rgba(246, 248, 250, 1)',
                'dark-gray': 'rgba(88, 96, 105, 1)',
                'black': 'rgba(47, 54, 61, 1)',
                'text-color': 'rgb(47, 54, 61)',
                'light-text': "rgba(106, 115, 125, 1)",
                'blue': 'rgba(73, 154, 249, 1)',
                'blue-darker': 'rgba(58, 123, 199, 1)',
                'blue-gradient': 'rgba(73, 154, 249, 0.08),'
            },
        },
    },
    plugins: [],
};
