module.exports = {
  content: ['./public/**/*.php'],
  theme: {
    screens: {
      sm: '480px',
      md: '768px',
      lg: '1024px',
      xl: '1280px',
      '2xl': '1536px',
    },
    extend: {
      colors: {
        primary: "#004e64",
        secondaryBlue: "#00a5cf",
        secondaryGreen: "#25a18e",
        blackText: "#202020",
        greyText: "#535353",
        aquamarine: "#9fffcb",
        lightGreen: "#7ae582",
        sectionGrey: "#fafafa",
        sectionBlue: "#00a5cf1a"
      },
      fontFamily : {
        oswald: ['Oswald', 'serif'],
        montserrat: ['Montserrat', 'serif']
      }
    }
  },
  plugins: [],
}
