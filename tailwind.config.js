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
                "green-dark": "#83B692",
                "brown-dark": "#302B27",
                "brown-darker": "#232323",
            },
            fontFamily: {
                sans: ["Poppins", "sans-serif"],
                dm: ["DM Sans", "sans-serif"],
                inter: ["Inter", "sans-serif"],
            },
        },
    },
    plugins: [],
};
