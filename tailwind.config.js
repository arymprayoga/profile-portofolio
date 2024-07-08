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
            },
        },
    },

    plugins: [
        require('@tailwindcss/typography'),
    ],
};
