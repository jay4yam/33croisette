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
            green:colors.green,
            'gold':'#B6967B'
        },
        extend: {
            fontFamily: {
                eurostile: ['Eurostile'],
                eurostileExtended:['Eurostile Extended'],
                retro: ['Retro Signature'],
                gotham: ['Gotham']
            },
            aspectRatio: {
                'image': '4/3'
            }
        },
    },
    plugins: [],
}
