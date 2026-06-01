/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php", "./src/**/*.{js,css}"],
  theme: {
    extend: {
      colors: {
        forest: {
          DEFAULT: "#2F4F3A",
          light: "#3D6B4F",
          dark: "#1F3828",
        },
        olive: {
          DEFAULT: "#556B2F",
          light: "#6B8540",
          dark: "#3F5020",
        },
        canvas: {
          DEFAULT: "#D8CBB3",
          light: "#EAE0CF",
          dark: "#C4B59D",
        },
        cream: {
          DEFAULT: "#F5F2EA",
          dark: "#EBE5D8",
        },
        dark: "#2B2B2B",
        muted: "#4B4B4B",
      },
      fontFamily: {
        heading: ["Poppins", "sans-serif"],
        body: ["Open Sans", "sans-serif"],
      },
    },
  },
  plugins: [
    require("@tailwindcss/forms"),
    require("./tailwind.font-scale.plugin"),
  ],
};
