/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.antlers.html',
        './resources/**/*.antlers.php',
        './resources/**/*.blade.php',
        './resources/**/*.vue',
        './content/**/*.md',
    ],

    theme: {
        extend: {
            fontFamily: {
                inconsolata: ['Inconsolata', 'monospace'],
                dancing: ['Dancing Script', 'cursive'],
            },
        },
    },

    plugins: [
        require('@tailwindcss/typography'),
    ],
};
