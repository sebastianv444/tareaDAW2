/* IMPORTANTE: ejecutar con node, ya que daria un error de lo contrario si lo usas
con el navegador. */
function main() {
    console.log("modulo bien importado");
}

const mensaje = console.log("muy bien crack");

module.exports = {
    main,mensaje
}