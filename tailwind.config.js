/** @type {import('tailwindcss').Config} */
export default {
    darkMode: ["class"],
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.jsx",
    ],
    plugins: [
        require('@tailwindcss/typography'),
    ],
}

