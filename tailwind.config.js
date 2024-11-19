import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './node_modules/flowbite/**/*.js',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                bgs1: {
                    '50': '#f1f2ff',
                    '100': '#e6e5ff',
                    '200': '#ceceff',
                    '300': '#aaa7ff',
                    '400': '#8176ff',
                    '500': '#593fff',
                    '600': '#4518ff',
                    '700': '#3507fa',
                    '800': '#2c05d2',
                    '900': '#2606ac',
                    '950': '#0c004f', // use this
                },
                bgs2: {
                    '50': '#fcfaea',
                    '100': '#f7f4ca',
                    '200': '#f1e897',
                    '300': '#e8d55c',
                    '400': '#dfbe28', // use this
                    '500': '#d0aa22',
                    '600': '#b4851a',
                    '700': '#906118',
                    '800': '#784e1b',
                    '900': '#66411d',
                    '950': '#3b220d',
                },
            }
        },
    },

    plugins: [
        forms,
        typography,
        require('flowbite/plugin'),
    ],
};
