const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        /* backgroundColor: theme => ({

            'primary': '#096191',

            'secondary': '#06abc6',

            'danger': '#e3342f',
        }),
        textColor: {

       'primary': '#096191',

        'secondary': '#06abc6',

       'danger': '#e3342f',

     }, */
        extend: {
            fontFamily: {
                /*                 sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                 */
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
            /* backgroundColor: ['active'],
            textColor: ['active'], */
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};