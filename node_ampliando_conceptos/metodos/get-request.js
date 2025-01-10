/* lo hacemos de la siguiente manera para exportar, ya que estamos usando common js, y 
queremos exportar esto para el server.js */

module.exports = (req, res) => {
    if(req.url === '/api/movies'){
        res.statusCode = 200;
        res.setHeader('content-Type', 'application/json');
        res.write(JSON.stringify(req.movies));
        res.end();
    }
};