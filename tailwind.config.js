import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    daisyui: {
        themes: [
            {
                mytheme: {
                    "primary": "#B8CD00",
                    "secondary": "#44523F",
                    "background": "#000000",
                    "info": "#4c6c54",
                    "primary-content": "#FFFFFF",
                    "accent": "#52AA34",
                    "accent-focus": "#275218",
                },
            }
        ]
    },

    theme: {
        extend: {
            fontFamily: {
                comic_sans_ms: ['Comic Sans MS'],
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            fontSize: {
                'title': '42px',
                'body': '26px',
                'note': '22px',
                'mini': '18px',
                'micro': '14px',
                //
            }
        },
    },

    plugins: [forms, typography, require("daisyui")],
};
