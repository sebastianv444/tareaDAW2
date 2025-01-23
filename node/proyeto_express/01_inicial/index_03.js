const express = require('express');

//esto hace lo de create http.createServer pero en express
const app = express();

/* el .use nos ayuda a interpretar la respuesta que nos viene en su formato
correspondiente */
/* El middleware actúa como un puente entre tecnologías, herramientas y bases de datos 
diversas para que pueda integrarlas sin dificultad en un único sistema. */
/* ahora con esto, cuando el cliente nos mande un json,text o urlencoded, ya nuestra
api en cualquier momento sabra interpretar el body. */
//middleware
app.use(express.text());
app.use(express.json());
app.use(express.urlencoded({extended:false}));

app.post('/usuario', (req,res)=>{
    //TODO(se lee tudu en ingles) guardar del body la información que nos llega.
    console.log(req.body);
    res.send('usuario guardado');
});
/* Los 2 puntos en :username es para admitir que puedan escribir parametros y no solo
rutas. */
app.get('/hola/:username', (req,res)=>{
    //el req.params coge los parametros.
    console.log(req.params);
    nombre = req.params.username.toUpperCase();
    console.log(typeof nombre);
    
    res.send(`Hola qué tal ${nombre}`)
});
/* Los 2 puntos en :x u :y es para admitir que puedan escribir parametros y no solo
rutas. */
app.get('/sumar/:x/:y',(req,res)=>{
    console.log(req.params);
    const resultado = parseInt(req.params.x) + parseInt(req.params.y)
    res.send(`El resultado de la suma es: ${resultado}`);
    //obteniendolo con desestructuring.
    const {x,y} = req.params;
});

app.get('/usuario/:username/foto',(req,res)=>{
    if(req.params.username === 'pepito'){
        return res.sendFile('mapache.jpeg',{
            /* con el root coge la ruta y __dirname coge tu ubicacion absoluta donde 
            te encuentras */
            root:__dirname
        })
    }else{
        res.send(`página nomalucha`);
    }
});

app.get('/nombre/:name/apellido/:lastname',(req,res)=>{
    console.log(req.params);
    res.send(`el usuario ${req.params.name} tiene de apellido ${req.params.lastname}`);
})

app.get('/preguntas',(req,res)=>{
    console.log(req.query);
    console.log(req.query.primera);
    console.log(req.query.segunda);
    //http://localhost:3000/preguntas?primera=hola&segunda=quetal
    res.send("imprimiendo preguntas");
});

app.listen(3000);
console.log("escuchando en el puerto 3000");