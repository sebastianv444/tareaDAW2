const http = require('node:http');
const fs = require('node:fs');

/* CON ESTO ACCEDEMOS A LAS VARIABLES DE ENTORNO, el ".env" es la variable de entorno
que accedemos con el process */
const puertoDeseado = process.env.PORT ?? 1234;

const procesarResultado = http.createServer((req,res)=>{
    if(req.url == '/'){
        //el statusCode 200 significa que le estoy enviando un okey como respuesta;
        res.statusCode = 200;
        res.end('hola ma@ss')
    }else if(req.url == '/contacto'){
        //con esto interpreta texto plano directamente.
        res.setHeader('Content-type', 'text/plain; charset=utf-8');
        res.end('<h1>bienvenido a mi página</h1>');
        //recuerda que la ruta puede ser cualqueira, acontinuacion le pusimos cualquier cosa.
    }else if(req.url == '/mi-imagen.png'){
        fs.readFile('./hola.png',(err,data)=>{
            res.statusCode = 200;
            /* aquí la data es la imagen pero en datos binarios aun guardados
            temporalmente en el buffer */
            res.setHeader('Content-type0', 'image/png');
            res.end(data);
        })
    }else{
        res.setHeader('Content-type', 'text/html; charset=utf-8');
        res.end('<h1>te has equivocado de página</h1>');
    }
});

/* node --watch ./nombre_fichero //esto hace que los cambios que hagas se ejecuten sin
para el servidor creado; */

//esto es para asignar un puerto.
procesarResultado.listen(puertoDeseado,()=>{
    console.log(
        `Servidor escuchando por el puerto http://localhost:${
            puertoDeseado
    }`)
});
