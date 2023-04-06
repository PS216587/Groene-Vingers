const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./src/**/*.{html,js}",
        "./node_modules/tw-elements/dist/js/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'green-body': '#f6f8e2',
                'green-secondary': '#9ccd62',
                'green-nav-two': '#e0ddca',
                'green-primary': '#3c3d42',
                'green-primary-two': '#3c3d00',
              },
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require("daisyui"),
        require("tw-elements/dist/plugin")
    ],
};
