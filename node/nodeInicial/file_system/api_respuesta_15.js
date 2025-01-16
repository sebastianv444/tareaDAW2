const http = require('node:http');
const fs = require('node:fs');

/* CON ESTO ACCEDEMOS A LAS VARIABLES DE ENTORNO, el ".env" es la variable de entorno
que accedemos con el process */
const puertoDeseado = process.env.PORT ?? 1234;

/* 
    IMPORTANTE!!: siempre hay que devolver un statusCode desde la api.
*/

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

/* 
    STATUS CODE:
    http.cat

    100-199: Respuesta informativa.
    200-299: respuesta satisfactoria.
    300-399: redirecciones.
    400-499: errores del cliente.
    500-599: errores del servidor.

    errores más tipicos

    200: OK
    201: RECURSO CREADO O GRABADO OK!!
    301: movido permanentemente y le redirigimos
    400: bad request(esto es cuando le estas enviando mal los datos en el json o otro a la API)
    401: no autorizado (unauthorized)
    403: prohibido (forbidden)
    404: pagina no encontrada (not found)
    500: internal server error
    503: servicio no disponible(service unavailable)

    ENTREVISTA DATO:
    HABLAR DEL ESTATUSCODE 103(ES UNO NUEVO);
*/