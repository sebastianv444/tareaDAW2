//Primer servidor en express

const express = require('express');

//esto hace lo de create http.createServer pero en express
const app = express();

app.get('/', (req,res)=>{
    res.send('lista de productos');
});

app.get('/miarchivo', (req,res)=>{
    // el segundo parametro es para decirle de donde tiene que coger nuestro archivo.
    res.sendFile('mapache.jpeg',{
        root: __dirname
    });
})

app.get('/mipagina',(req,res)=>{
    /* __dirname: es una variable de entorno que le indica la ruta absoluta del directorio que 
    contiene el archivo que se está ejecutando actualmente */
    res.sendFile('static/index.html',{
        root: __dirname
    })
})

app.get('/usuario',(req,res)=>{
    res.json({
        //admite que no le pongamos comillas, siempre y cuando no tengan caracteres especiales.
        nombre: "pepe",
        apellido: "robustiano",
        edad: 40,
        direccion: {
            ciudad: "Los angeles",
            calle: "Del alamo"
        }
    })
})

app.post('/productos',(req,res)=>{
    res.send("creando el producto");
});

/* con el put es cuando quieros modificar cosas en general. */
app.put('/producto',(req,res)=>{
    res.put("actualizando una parte del producto");
});

/* con el patch solo modificamos una campo en especifico. */
app.patch('/producto',(req,res)=>{
    res.send("actualizando una parte del producto");
});

app.delete('/producto',(req,res)=>{
    res.send("borrando el producto");
})

// si no coincide ninguna de nuestras paginas
/* app.use((req,res)=>{
    res.status(404).send("no se encontró la página maj@");
}); */

//para que escuche en el puerto 3000
app.listen(3000);
console.log("escuchando en el puerto 3000");