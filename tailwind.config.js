module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            colors: {   // Custom color scheme
                primary: {
                    DEFAULT: '#F5B841',
                    light: '#F9D48B',
                    lighter: '#FCEAC5',
                    dark: '#F3A916',
                },
                accent: {
                    DEFAULT: '#E3123C',
                    light: '#FFFAFB',
                    dark: '#25283D',
                    grey: '#B8B2B3',
                }
            },
            fontFamily: {   // Custom fonts
                'title': ['Nunito', 'sans-serif'],
                'body': ['Raleway', 'sans-serif'],
            },
            boxShadow: {    // Custom shadows
                dark: '0 5px 10px 0 rgba(0, 0, 0, 0.6)',
            },
            textShadow: {
                'dark': '0 5px 5px rgba(0, 0, 0, 0.8)',
            },
        },
    },
    variants: {
        extend: {
            backgroundColor: ['active'],
            textColor: ['active'],
            transitionProperty: ['hover', 'focus'],
            transitionDuration: ['hover', 'focus'],
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('tailwindcss-textshadow'),
        require("tailwind-heropatterns")({
            // as per tailwind docs you can pass variants
            variants: [],

            // the list of patterns you want to generate a class for
            // the names must be in kebab-case
            // an empty array will generate all 87 patterns
            patterns: ["i-like-food"],

            // The foreground colors of the pattern
            colors: {
              default: "#F5B841",
            },

            // The foreground opacity
            opacity: {
              default: "0.1",
            }
        }),
    ],
}
