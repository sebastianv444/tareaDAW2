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

app.put('/productos/:id',(req,res)=>{
    // para obtener la informacion que quiero actualizar.
    const nuevosDatos = req.body;
    const encontrado = productos.find((producto)=>producto.id === parseInt(req.params.id));
    
    if(!encontrado){
        return res.status(404).json({
            mensaje: "producto no encontrado"
        });
    }

    //si alguna propiedad de nuevosDatos coincide con alguna propiedad de un objeto de productor:
    /* si existe que algun campo que coincida el id lo va sustituir todo lo de p(producto)
    por todo lo de nuevosDatos */
    productos = productos.map(p => p.id === parseInt(req.params.id) ? {...p, ...nuevosDatos} : p);
    
    console.log(productos);
    res.json({
        mensaje: "producto actualizado"
    });
});

app.delete('/productos/:id',(req,res)=>{
    //buscamos el producto por su id para borrarlo, por eso pasamos por parametros /:id
    //esto hace la busqueda hasta encontrar y lo almacena en una variable.
    const encontrado = productos.find((producto)=>producto.id === parseInt(req.params.id));
    
    if(!encontrado){
        return res.status(404).json({
            mensaje: "producto"
        });
    }

    //borramos el producto
    productos = productos.filter(p => p.id !== parseInt(req.params.id));
    /* RETORNAR SIEMPRE UN JSON Y UN STATUSCODE COMO RESPUESTA */
    res.json(productos);
});

app.get('/productos/:id',(req,res)=>{
    /* RECUERDA: el req.query es para obtener el mas parametros depues de un ? en la url */
    console.log(req.params.id);
    const encontrado = productos.find((producto)=>producto.id === parseInt(req.params.id));
    res.json(encontrado);
});



app.listen(3000);
console.log("escuchando por el puerto 3000");
