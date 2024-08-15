/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./public/**/*.js",
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
            gridTemplateRows: {
                10: "repeat(4, minmax(10rem, 10rem))",
                5: "repeat(4, minmax(7rem, 7rem))",
                3: "repeat(4, minmax(4rem, 4rem))",
            },
        },
    },
    plugins: [],
};
