/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                biru: "#005B9E",
                hijau1: "#BBF21F",
                hijau2: "#80CC1F",
                biru_dark: "#0B4575",
            },
            dropShadow: {
                video: "0 0 16px rgba(0,0,0, .45)",
            },
        },
    },
    plugins: [],
};
