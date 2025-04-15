import { fontFamily } from 'tailwindcss/defaultTheme';

import colors from 'tailwindcss/colors';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
  ],

  theme: {
    extend: {
      container: {
        center: true,
        padding: '2rem',
      },
      colors: {
        primary: colors.emerald,
      },
      fontFamily: {
        sans: ['var(--font-sans)', ...fontFamily.sans],
        heading: ['var(--font-heading)', ...fontFamily.serif],
      },
      aspectRatio: {
        frame: '3/4',
        banner: '2/1',
      }
    },
  },

  plugins: [forms],
};
