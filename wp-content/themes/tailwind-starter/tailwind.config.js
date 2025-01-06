/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.php',
    './**/*.php',
    './header.php',
    './footer.php',
    './page-templates/*.php',
    './assets/js/**/*.js',
    './front-page.php',
  ],
  theme: {
    extend: {
      fontFamily: {
        clash: ['"Clash Grotesk"', 'sans-serif'],
      },
      screens: {
        sm: '640px',
        md: '768px',
        lg: '1024px',
        xl: '1280px',
        '2xl': '1440px',
      },
      maxWidth: {
        container: '1440px',
      },
      backgroundPosition: {
        'right-center': 'right center',
      },
    },
  },
  plugins: [],
};
