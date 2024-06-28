/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    container: {
      center: true,
      padding: '24px'
    },
    extend: {
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
  plugins: [],
};

export default config;
