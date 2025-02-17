exports.success = function(req, res, mensaje = '', status = 200) {
    // para estandarizar todas las respuestas y que tengan el mismo formato
    res.status(status).send({
        error: false,
        status: status,
        body: mensaje
    })
}

exports.error = function(req, res, mensaje = 'Error interno', status = 500) {  
    res.status(status).send({
        error: true,
        status: status,
        body: mensaje
    })
}