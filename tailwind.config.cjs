const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    container: {
      center: true,
      padding: '24px'
    },
    extend: {
      colors: {
        'background':'#fff',
        'foreground':'#333',
        'border':'#eee'
      },
      spacing: {
        'xs':'12px',
        'sm':'24px',
        'md':'48px',
        'lg':'72px',
        'xl':'96px',
      },
      lineHeight: {
        'xs':'12px',
        'sm':'24px',
        'md':'48px',
        'lg':'72px',
        'xl':'96px',
      }
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
  ],
};
