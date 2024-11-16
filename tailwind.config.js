// tailwind.config.js
module.exports = {
  content: [
    "./app/views/**/*.html",  // Scans all HTML files in app/views
    "./app/views/**/*.php",   // Scans all PHP files in app/views
    "./public/**/*.js",       // Include any JavaScript files if needed
  ],
  theme: {
    extend: {
      fontFamily: {
        'just-another-hand': ['"Just Another Hand"', 'cursive'],
        'julius-sans-one': ['"Julius Sans One"', 'sans-serif'],
        'righteous-regular':['"Righteous", sans-serif'],
        'josefin-slab': ['"Josefin Slab"', 'serif'],
        'k2d': ['"K2D"', 'sans-serif'],
        'lateef': ['"Lateef"', 'serif'],
        },
    },
  },
  plugins: [],
};
