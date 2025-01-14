/* lo hacemos de la siguiente manera para exportar, ya que estamos usando common js, y 
queremos exportar esto para el server.js */

/* GET: el metodo get este realiza una petición a un recurso específico. No permite el 
envió de datos a excepción si dichos datos se envían como parámetro en la Url que realiza 
la petición. */

module.exports = (req, res) => {
    if(req.url === '/api/movies'){
        res.statusCode = 200;
        res.setHeader('content-Type', 'application/json');
        res.write(JSON.stringify(req.movies));
        res.end();
    }
};