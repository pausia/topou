/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#0081FF', 
        primarykakak: '#0067CC', 
        primarybungsu: '#CCE6FF', 
        secondary: '#F8B607',
        secondarykakak: '#C69106',
        secondarybungsu: '#FEF0CD',
        tulisH1: '#001A33', 
        white: '#FFFFFF',
        whitetulis: '#E0E0E0',
        hitamku: '#333333',
      },
      fontFamily: {
        cabinet: ['Cabinet Grotesk', 'sans'], 
        inter: ['Inter', 'sans'], 
      },
      fontSize: {
        '2xl': '1.5rem', 
      },
      lineHeight: {
        'extra-loose': '4.7rem',
        '12': '3rem',
      },
      bg: {
        primary: '#0081FF', 
        white: '#FFFFFF',
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

