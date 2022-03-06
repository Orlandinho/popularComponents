module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
  theme: {
    extend: {
        spacing: {
            'table': '2560px',
            '128': '32rem'
        }
    },
  },
  plugins: [
      require('@tailwindcss/forms'),
  ],
}
