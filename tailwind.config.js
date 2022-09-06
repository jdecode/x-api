const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                "tdl": {
                    "50": "#FEF4F1",
                    "100": "#FDE9E3",
                    "200": "#FBD2C6",
                    "300": "#F8B5A0",
                    "400": "#F49376",
                    "500": "#EF5D30",
                    "600": "#ED4917",
                    "700": "#E34212",
                    "800": "#D03D10",
                    "900": "#B9360E"
                }
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
    darkMode: 'class'
};
