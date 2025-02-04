/* ESTE ARCHIVO ES PARA TENER BUENAS PRACTICA PARA ESTANDARIZAR LAS RESPUESTAS: */

/* OJO: el nombre que va despues del exports. es con el nombre que vamos a poder llamar a la
funcion cuando importemos en el archivo que deseemos. */
exports.success = function(req,res, mensaje = '', status = 200){
    // para estandarizar todas las respuestas y que tengan el mismo formato
    res.status(status).send({
        error: false,
        status: status,
        body: mensaje
    });
};  

exports.error = function(req,res, mensaje = 'Error interno', status = 500){
    // para estandarizar todas las respuestas y que tengan el mismo formato
    res.status(status).send({
        error: true,
        status: status,
        body: mensaje
    });
};