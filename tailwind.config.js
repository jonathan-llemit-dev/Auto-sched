/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/protonemedia/laravel-splade/lib/**/*.vue",
        "./vendor/protonemedia/laravel-splade/resources/views/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],

    theme: {
        extend: {
            maxWidth: {
                namew: '8rem',
                tabw: '60rem'
            },

            maxHeight: {
                60: '15rem'
            },

            margin: {
                xs: '0.1rem',
                mr1: '6rem',
                mr2: '8rem',
                mr3: '10rem'
            },

            colors: {
                b1: '#CAF0F8',
                b2: '#ADE8F4',
                b3: '#90E0EF',
                b4: '#48CAE4',
                b5: '#00B4D8',
                b6: '#0096C7',
                b7: '#0077B6',
                b8: '#023E8A',
                b9: '#03045E',
                b10: '#D9F4F9',

                blc1: '#303030'
            },

            borderRadius: {
                50: '50px'
            },

            fontSize: {
                xs0: '0.70rem',
                xs1: '0.60rem',
                xs2: '0.50rem',
                xs3: '0.40rem'
            },

            height: {
                100: '30rem'
            },

            width: {
                tabw: '60rem',
                100: '30rem'
            }
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography")
    ],
};