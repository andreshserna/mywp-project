/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.php', // Archivos PHP raíz
    './**/*.php', // Subcarpetas de PHP
    './header.php', // Header específico
    './footer.php', // Footer específico
    './page-templates/*.php', // Plantillas personalizadas
    './assets/js/**/*.js', // Si tienes archivos JS personalizados
  ],
  theme: {
    extend: {
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
    },
  },
  plugins: [],
};
