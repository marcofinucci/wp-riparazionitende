/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './**/*.php',
    './src/**/*.{js,css}',
  ],
  theme: {
    extend: {
      colors: {
        forest: {
          DEFAULT: '#2F4F3A',
          light: '#3D6B4F',
          dark: '#1F3828',
        },
        olive: {
          DEFAULT: '#556B2F',
          light: '#6B8540',
          dark: '#3F5020',
        },
        canvas: {
          DEFAULT: '#D8CBB3',
          light: '#EAE0CF',
          dark: '#C4B59D',
        },
        cream: {
          DEFAULT: '#F5F2EA',
          dark: '#EBE5D8',
        },
        dark: '#2B2B2B',
        muted: '#4B4B4B',
      },
      fontFamily: {
        heading: ['Poppins', 'sans-serif'],
        body: ['Open Sans', 'sans-serif'],
      },
      backgroundImage: {
        'canvas-texture': "url(\"data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23000000' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E\")",
      },
      typography: {
        DEFAULT: {
          css: {
            color: '#2B2B2B',
            a: {
              color: '#2F4F3A',
              '&:hover': { color: '#556B2F' },
            },
          },
        },
      },
    },
  },
  plugins: [],
};
