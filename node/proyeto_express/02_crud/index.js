const express = require('express');
const morgan = require('morgan');
/* morgan es un logger, que nos ayuda a darnos informacion, aunque esta deprecado. */
const app = express();
app.use(express.json());
app.use(morgan('dev'));

let productos = [
    {
        id:1,
        producto: 'portátil',
        precio: 300
    }
]

app.get('/productos',(req,res)=>{
    res.send(productos)
});

app.post('/productos',(req,res)=>{
    /* el body es el cuerpo del request que se te manda */
    console.log(req.body);
    /* estamos cogiendo todo lo de req.body y lo estamos copiando. Tambien, estamos creando 
    una propiedad nueva para pasarsela luego a y introducirla en productos.*/
    const nuevoProducto = {...req.body, id: productos.length + 1};
    productos.push(nuevoProducto);
    res.send("producto guardado");
});

app.put('/productos',(req,res)=>{
    res.send('actualizar');
});

app.delete('/productos',(req,res)=>{
    res.send('borrando productos');
});

app.get('/productos/:id',(req,res)=>{
    /* RECUERDA: el req.query es para obtener el mas parametros depues de un ? en la url */
    console.log(req.params.id);
    const encontrado = productos.find((producto)=>producto.id === parseInt(req.params.id));
    res.json(encontrado);
});

app.listen(3000);
console.log("escuchando por el puerto 3000");
