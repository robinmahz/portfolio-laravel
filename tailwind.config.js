/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
      sans: ['"lato"', "sans-serif"],
    },
    extend: {
      backgroundImage: {
        backg: "url('/public/images/backg.jpg')",
        name_logo: "url('/public/images/robin_logo.png')",
      },
    },
  },
  plugins: [],
};
