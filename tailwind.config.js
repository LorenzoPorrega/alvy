import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    "./storage/framework/views/*.php",
    "./resources/views/**/*.blade.php",
  ],
  // darkMode: "class", // Assicurati che questa riga non sia commentata se desideri supportare la modalità scura
  theme: {
    extend: {
      colors: {
        honey: {
          300: "#ad6a00",
          500: "#fa9a00",
          700: "#ffbf00",
        },
        //   green: {
        //     500: "#48bb78",
        //     600: "#38a169",
        //   },
        //   blue: {
        //     500: "#3b82f6",
        //     600: "#2563eb",
        //   },
        //   yellow: {
        //     500: "#fbbf24",
        //     600: "#f59e0b",
        //   },
        //   red: {
        //     500: "#ef4444",
        //     600: "#dc2626",
        //   },
        //   purple: {
        //     500: "#8b5cf6",
        //     600: "#6d28d9",
        //   },
        //   teal: {
        //     500: "#14b8a6",
        //     600: "#0d9488",
        //   },
        //   gray: {
        //     500: "#6b7280",
        //     600: "#4b5563",
        //   },
      },
      fontFamily: {
        sans: ["Figtree", ...defaultTheme.fontFamily.sans],
      },
      fontWeight: {
        hairline: 100,
        "extra-light": 100,
        thin: 200,
        light: 300,
        normal: 400,
        medium: 500,
        semibold: 600,
        bold: 700,
        extrabold: 800,
        "extra-bold": 800,
        black: 900,
      },
      fontSize: {
        xxs: /* ['12px', '16px'] */ "0.625rem",
        micro: /* ['8px', '12px'] */ "0.5rem",
        pico: /* ['4px', '8px'] */ "0.325rem",
      },
    },
  },
  variants: {
    extend: {
      borderWidth: ["focus-within"],
      borderColor: ["focus-within"],
    },
  },
  plugins: [forms],
  safelist: [
    {
      pattern:
        /(bg|text|dark:bg|dark:text)-(green|blue|yellow|red|purple|teal|gray)-(500|600)/,
    },
  ],
};
