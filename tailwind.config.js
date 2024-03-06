/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./resources/**/*.scss",
    ],
    theme: {
        extend: {
            fontFamily: {
                primary: ["Montserrat", "sans-serif"],
                secondary: ["Open Sans", "sans-serif"],
            },
            backgroundImage: {
                parallax:
                    'url("/resources/images/taking-notes-and-working-on-laptop.jpg")',
            },
            screens: {
                xs: { min: "320px", max: "639px" },
                sm: { min: "640px", max: "767px" },
                md: { min: "768px", max: "1023px" },
                lg: { min: "1024px", max: "1279px" },
                xl: { min: "1278px" }
            },
        },
    },
    plugins: [],
};
