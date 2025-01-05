/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}","./*.{php,html}", "./**/*.php"], //Busca archivos php y html en la carpeta raiz y en subdirectorios menos en src//
  theme: {
    extend: {
      colors: {
        beigeCustom: "#EAE7DD",
        cafeCustom: "#99775C",
        cafeClaroCustom: "#ac8a6f",
        grisCustom: "#5B5B5B",
        rojoCustom: "#AC3030",
        rojoClaroCustom: "#c74545",
        verdeCustom: "#188a21",
        verdeClaroCustom: "#1aa125",
      },
    },
  },
  plugins: [],
}