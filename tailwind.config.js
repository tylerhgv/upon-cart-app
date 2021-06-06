module.exports = {
    purge: [
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
            }
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
    plugins: [],
}
