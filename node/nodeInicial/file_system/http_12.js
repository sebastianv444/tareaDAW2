const http = require('node:http');

//un serviodr sólo hace dos cosas, recibe una retición o sirve una respuesta

// este create server recibe un callback con 2 parametros, son el request y la respuesta;
const server = http.createServer((req,res)=>{
    console.log('requesta recibida');
    res.end('hola maj@');
    /* cuando recibimos una petición respondemos con res y finalizamos la 
    petición enviando un 'hola maj@'*/
});

//esto es para asignar un puerto.
/* server.listen(3000,()=>{
    console.log("servidor escuchando por el puerto 3000");

})
 */
/* 
    podemos escuchar por un puerto vacío aunque nosotros no sepamos dicho puerto. Para ello
    le pasamos un cero, esto hace que automáticamente busque un puerto disponible.
*/
server.listen(0,()=>{
    console.log(
        `Servidor escuchando por el puerto http://localhost:${
        server.address().port
    }`
  );
})