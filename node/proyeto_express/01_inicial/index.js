//Primer servidor en express

const express = require('express');

//esto hace lo de create http.createServer pero en express
const app = express();

//si alguien hace una peticion get, y escribe /productos se le manda el res.send()
app.get('/productos', (req,res)=>{
    /* Por lo general en este tipo de peticiones se hace:
        - consultar a la base de datos.
        - procesar datos.
        - etc...
    */
    res.send('lista de productos');
});

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

//para que escuche en el puerto 3000
app.listen(3000);
console.log("escuchando en el puerto 3000");