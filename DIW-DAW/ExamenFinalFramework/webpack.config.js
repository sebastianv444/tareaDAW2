const path = require("path");
const HtmlWebpackPlugin = require("html-webpack-plugin");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");

module.exports = {
  entry: "./src/js/index.js", // tu archivo JS de entrada
  output: {
    filename: "bundle.js", // Nombre del archivo JS empaquetado
    path: path.resolve(__dirname, "dist"), // Carpeta donde se guardarán los archivos finales
    clean: true, // Limpia la carpeta dist antes de cada build
  },
  module: {
    rules: [
      {
        test: /\.css$/,
        use: [
          MiniCssExtractPlugin.loader, // Extrae CSS en un archivo separado
          "css-loader",
        ],
      },
      {
        test: /\.scss$/,
        use: [MiniCssExtractPlugin.loader, "css-loader", "sass-loader"],
      },
      {
        test: /\.(png|jpg|jpeg|gif|svg)$/i,
        type: "asset/resource", // Sustituye file-loader
        generator: {
          filename: "assets/img/[name][ext]", // Guarda las imágenes con hash
        },
      },
    ],
  },
  plugins: [
    new HtmlWebpackPlugin({
      template: "./src/index.html", // Template del archivo HTML
    }),
    new MiniCssExtractPlugin({
      filename: "styles.css", // Nombre del archivo CSS generado
    }),
  ],
  devServer: {
    /* 
      Este "static:" permite que el servidor acceda a archivos estáticos si los hay,
      pero no es necesario este static para que sirva el servidor.
    */
    static: path.join(__dirname, "dist"), // Establece la carpeta de archivos estáticos
    port: 8080, // Puerto para el servidor de desarrollo
    open: true, // Abre el navegador automáticamente
    liveReload: true, // Habilita la recarga en vivo
    watchFiles: ["./src/index.html"], // Observa cambios en todos los archivos HTML dentro de src
  },
  mode: "development", // Modo de desarrollo (puedes cambiar a 'production' para producción)
};
