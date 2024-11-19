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
                sans: ['Helvetica', 'Arial', ...defaultTheme.fontFamily.sans],             },
            colors: {
                'gray': 'rgba(246, 248, 250, 1)',
                'text-color': '#2F363D',
            },
        },
    },
    plugins: [],
};
