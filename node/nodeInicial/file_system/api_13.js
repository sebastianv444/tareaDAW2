const http = require('node:http');

/* CON ESTO ACCEDEMOS A LAS VARIABLES DE ENTORNO, el ".env" es la variable de entorno
que accedemos con el process */
const puertoDeseado = process.env.PORT ?? 1234;

const procesarResultado = (req,res)=>{
    console.log('requesta recibida');
    res.end('hola maj@');
    /* cuando recibimos una petición respondemos con res y finalizamos la 
    petición enviando un 'hola maj@'*/
};

const server = http.createServer(procesarResultado);

//esto es para asignar un puerto.
server.listen(puertoDeseado,()=>{
    console.log(
        `Servidor escuchando por el puerto http://localhost:${
            puertoDeseado
    }`)
});
