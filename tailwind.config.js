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
      typography: (theme) => ({
        DEFAULT: {
          css: {
            fontSize: "1rem",
            color: theme("colors.dark"),
            fontFamily: theme("fontFamily.body").join(", "),
            lineHeight: "1.625",
            maxWidth: "none",

            "--tw-prose-body": theme("colors.dark"),
            "--tw-prose-headings": theme("colors.forest.DEFAULT"),
            "--tw-prose-links": theme("colors.forest.DEFAULT"),
            "--tw-prose-bold": theme("colors.dark"),
            "--tw-prose-counters": theme("colors.forest.DEFAULT"),
            "--tw-prose-bullets": theme("colors.olive.DEFAULT"),
            "--tw-prose-hr": theme("colors.canvas.dark"),
            "--tw-prose-quotes": theme("colors.muted"),
            "--tw-prose-quote-borders": theme("colors.olive.DEFAULT"),

            a: {
              color: theme("colors.forest.DEFAULT"),
              fontWeight: "500",
              textDecoration: "underline",
              textUnderlineOffset: "2px",
              "&:hover": {
                color: theme("colors.olive.DEFAULT"),
              },
            },

            p: {
              marginTop: "1rem",
              marginBottom: "1rem",
            },

            h1: {
              fontFamily: theme("fontFamily.heading").join(", "),
              fontWeight: "700",
              fontSize: "1.875rem",
              lineHeight: "1.25",
              color: theme("colors.forest.DEFAULT"),
              marginTop: "2rem",
              marginBottom: "1rem",
              "@media (min-width: 768px)": {
                fontSize: "2.25rem",
              },
            },

            h2: {
              fontFamily: theme("fontFamily.heading").join(", "),
              fontWeight: "600",
              fontSize: "1.25rem",
              lineHeight: "1.25",
              color: theme("colors.forest.DEFAULT"),
              marginTop: "2rem",
              marginBottom: "1rem",
              "@media (min-width: 768px)": {
                fontSize: "1.5rem",
              },
            },

            h3: {
              fontFamily: theme("fontFamily.heading").join(", "),
              fontWeight: "600",
              fontSize: "1.125rem",
              lineHeight: "1.4",
              color: theme("colors.forest.DEFAULT"),
              marginTop: "2rem",
              marginBottom: "1rem",
            },

            h4: {
              fontFamily: theme("fontFamily.heading").join(", "),
              fontWeight: "600",
              fontSize: "1rem",
              lineHeight: "1.4",
              color: theme("colors.forest.DEFAULT"),
              marginTop: "2rem",
              marginBottom: "1rem",
            },

            "h1, h2, h3, h4": {
              "& strong": {
                color: "inherit",
                fontWeight: "700",
              },
            },

            blockquote: {
              fontStyle: "normal",
              fontWeight: "400",
              color: theme("colors.muted"),
              borderLeftColor: theme("colors.olive.DEFAULT"),
              borderLeftWidth: "3px",
            },

            "ul > li::marker": {
              color: theme("colors.olive.DEFAULT"),
            },

            "ol > li::marker": {
              color: theme("colors.forest.DEFAULT"),
              fontWeight: "600",
            },

            hr: {
              borderColor: theme("colors.canvas.dark"),
              marginTop: "2rem",
              marginBottom: "2rem",
            },

            img: {
              borderRadius: theme("borderRadius.xl"),
            },

            "figure img": {
              marginTop: 0,
              marginBottom: 0,
            },

            figcaption: {
              color: theme("colors.muted"),
              fontSize: "0.875rem",
            },

            "thead th": {
              color: theme("colors.forest.DEFAULT"),
              fontFamily: theme("fontFamily.heading").join(", "),
            },
          },
        },

        /* prose-lg */
        lg: {
          css: {
            fontSize: "1.125rem",
            lineHeight: "1.5",
          },
        },
      }),
    },
  },
  plugins: [require("@tailwindcss/typography"), require("@tailwindcss/forms")],
};
