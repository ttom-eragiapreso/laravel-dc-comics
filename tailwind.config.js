/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/**/*.{blade.php, js}'
  ],
  theme: {
    extend: {
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            space: {
            50: '#8388AF',
            100: '#6A70A0',
            200: '#585D89',
            300: '#484C70',
            400: '#383B57',
            500: '#282A3E',
            600: '#181925',
            700: '#08080C',
            },
            mint: {
            50:  '#A9DBC7',
            100: '#8CCFB4',
            200: '#6FC3A1',
            300: '#52B78F',
            400: '#429E79',
            500: '#368163',
            600: '#2A654D',
            700: '#1E4837',
            },
            navy: {
            50:  '#91DEF3',
            100: '#6CD2EF',
            200: '#47C7EB',
            300: '#23BCE7',
            400: '#16A3CA',
            500: '#1285A5',
            600: '#0A4A5C',
            700: '#062C37',
            },
            bisque: {
            50:  '#FFD8AD',
            100: '#FFC485',
            200: '#FFB05C',
            300: '#FF9C33',
            400: '#FF890A',
            500: '#E07400',
            600: '#B85F00',
            700: '#8F4A00',
            },
            pastel: {
            50:  '#F9B5B4',
            100: '#F6908E',
            200: '#F36A68',
            300: '#F04542',
            400: '#ED201D',
            500: '#D01411',
            600: '#AA100E',
            700: '#840D0B',
            }
        }
    },
  },
  plugins: [],
}
