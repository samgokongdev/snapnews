import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                putih: '#FFFBF5',
                merah: '#D93232',
                kuning: '#FFCB46',
                hitam: '#343434',
                biru: '#609DED',
                abu: '#B9B9B9',
                primary: '#3490dc',
                secondary: '#ffed4a',
                danger: '#e3342f',
            },
            fontFamily: {
                sans: ['Poppins', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        forms, typography
    ],
};
