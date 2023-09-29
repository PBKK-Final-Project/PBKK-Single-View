/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                "purple-dark": "#0E1223",
                "purple-light": "#4860C9",
            },
        },
    },
    plugins: [],
};
