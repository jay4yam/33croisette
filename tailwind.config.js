import colors from "tailwindcss/colors.js";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
  theme: {
        colors:{
            gray:colors.gray,
            red:colors.red,
            white:colors.white,
            'gold':'#B6967B'
        },
    extend: {},
  },
  plugins: [],
}

