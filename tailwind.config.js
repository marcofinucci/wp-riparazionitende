/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php", "./src/**/*.{js,css}"],
  theme: {
    extend: {
      colors: {
        forest: {
          DEFAULT: "#27543F",
          light: "#3D6B4F",
          dark: "#14302A",
        },
        olive: {
          DEFAULT: "#556B2F",
          light: "#6B8540",
          dark: "#3F5020",
        },
        accent: {
          DEFAULT: "#E2682C",
          light: "#F0813F",
          dark: "#C4541E",
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
        dark: "#1A2421",
        muted: "#4B4B4B",
      },
      fontFamily: {
        heading: ["Bricolage Grotesque", "sans-serif"],
        body: ["Inter", "sans-serif"],
      },
    },
  },
  plugins: [
    require("@tailwindcss/forms"),
    require("@tailwindcss/typography"),
    require("./tailwind.font-scale.plugin"),
  ],
};
