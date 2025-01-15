/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./**/*.php",  // Busca archivos PHP en la carpeta raíz y en subdirectorios
    "./**/*.js",    // Busca archivos JS en la carpeta raíz y en subdirectorios
    "!./node_modules/**"  // Excluir node_modules
  ],
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