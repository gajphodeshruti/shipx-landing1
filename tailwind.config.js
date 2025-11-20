/** @type {import('tailwindcss').Config} */
module.exports = {
  // 1. Configure the files Tailwind should scan for utility classes.
  // This is crucial for performance and ensuring all your classes are included.
  content: [
    // Look in all your Blade templates
    './resources/**/*.blade.php',
    // Look in your Vue/React/JS files
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  
  // 2. Customize your theme (colors, fonts, spacing, etc.)
  theme: {
    extend: {
      // Define custom colors used in your design (e.g., ShipX branding)
      colors: {
        // Base colors from the design
        'blue-950': '#071633', // Deep navy/primary background
        'purple-600': '#7C3AED', // Primary interactive/accent color
        'purple-700': '#6D28D9',
        'purple-400': '#A78BFA',
        'lime-500': '#84CC16', // Contact form button (example)
        
        // General utility colors
        gray: {
          50: '#F9FAFB',
          100: '#F3F4F6',
          200: '#E5E7EB',
          400: '#9CA3AF',
          600: '#4B5563',
          700: '#374151',
          800: '#1F2937',
        }
      },
      // You can also extend typography, spacing, or other properties here.
      // Example for custom container sizes:
      container: {
        padding: {
          DEFAULT: '1rem',
          sm: '2rem',
          lg: '4rem',
          xl: '5rem',
          '2xl': '6rem',
        },
      },
    },
  },

  // 3. Plugins (like Tailwind Forms, Typography, etc.)
  plugins: [
    // If you use the @tailwindcss/forms plugin for better form styles:
    // require('@tailwindcss/forms'),
  ],
}