/** @type {import('tailwindcss').Config} */
<<<<<<< HEAD
=======
const defaultTheme = require('tailwindcss/defaultTheme')
>>>>>>> a0db5e8479135862aa3026a19195aa0d0f9aa96e
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
<<<<<<< HEAD
      extend: {},
    },
    plugins: [],
  };
=======
      extend: {
        fontFamily: {
          sans: ['InterVariable', ...defaultTheme.fontFamily.sans],
        },  
      },
    },
    plugins: [],
  }
>>>>>>> a0db5e8479135862aa3026a19195aa0d0f9aa96e
