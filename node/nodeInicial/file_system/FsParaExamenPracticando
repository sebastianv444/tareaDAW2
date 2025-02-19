const fs = require('fs');
const path = require('path');

function manejarArchivo(numero) {
  const rutaArchivo = path.join(__dirname, 'datos', `archivo_${numero}.txt`);

  if (fs.existsSync(rutaArchivo)) {
    console.log(`El archivo ${rutaArchivo} existe. Leyendo contenido...`);

    fs.readFile(rutaArchivo, 'utf8', (err, data) => {
      if (err) {
        console.error('Error al leer el archivo:', err);
        return;
      }
      console.log(`Contenido del archivo:\n${data}`);

      // Opcionalmente, agregar contenido al archivo
      fs.appendFile(rutaArchivo, '\nNueva línea agregada.', (err) => {
        if (err) {
          console.error('Error al escribir en el archivo:', err);
        } else {
          console.log('Nueva línea agregada correctamente.');
        }
      });
    });
  } else {
    console.log(`El archivo no existe. Creándolo en: ${rutaArchivo}`);

    fs.writeFile(rutaArchivo, `Este es el archivo número ${numero}`, (err) => {
      if (err) {
        console.error('Error al crear el archivo:', err);
      } else {
        console.log(`Archivo creado con éxito en: ${rutaArchivo}`);
      }
    });
  }
}

// Simulación de entrada del usuario
const numeroUsuario = 5;
manejarArchivo(numeroUsuario);
