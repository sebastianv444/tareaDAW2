/* estamos usando la extension de Thunder Client para  */

const http = require('http');
let movies = require('./movies.json');
const getRequest = require('./metodos/get-request');

const PORT = process.env.PORT || 3000;

const server = http.createServer((req,res)=>{
    //el importante es el = movies, ya que es la variable con el json.
    //el .movies es inventado.
    req.movies = movies;
    switch (req.method) {
        case 'GET':
            getReq(req,res);
            break;
    
        case 'POST':
            postReq(req,res);
            break;

        case 'PUT':
            putReq(req,res);
            break;

        case 'DELETE':
            deleteReq(req,res);
            break;

        default:
            /* en caso que no haya hecho ninguna de las anteriores peticiones que son
             callbacks, le mandaremos un 404 que no se ha encontrado. */
            res.statusCode = 404;
            //esto es los dato de la cabecera mandada
            res.setHeader('Content-type', 'application/json');
            /* EL JSON.stringify sirve para convertir en objeto y string. */
            res.write(JSON.stringify({
                titulo: "no encontrado",
                mensaje: 'ruta no encontrada'
            }))
            res.end();
            break;
    }
})

server.listen(PORT, ()=>{
    console.log(`servidor escuchando por el puerto: http//localhost:${PORT}`);
});