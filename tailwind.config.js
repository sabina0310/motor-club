/** @type {import('tailwindcss').Config} */
const plugin = require('tailwindcss/plugin')
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
 theme: {
    extend: {
      fontFamily: {
        monserrat: ['Montserrat', 'sans-serif']
      },
      fontSize: {
        '12': '12px',
        '14': '14px',
        '16': '16px',
        '18': '18px',
        '20': '20px',
        '22': '22px',
        '24': '24px',
        '26': '26px',
        '28': '28px',
        '30': '30px',
        '32': '32px',
        '34': '34px',
        '36': '36px',
      },
      colors: {
        'primary': '#2d2b4e',
        'primary-2' :'#d5d5dc',
        'secondary': '#b69765',
        'black': '#1E1E1E',
      },
      container: {
        center: true,
        padding: {
          DEFAULT : '30px',
        }
      },
    },
  },
   plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
}

