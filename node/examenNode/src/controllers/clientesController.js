const controlador = {};

controlador.listar = (req, res)=> {
    req.getConnection((err, conexion)=> {
        // deberíamos controlar el error de la conexión
        conexion.query('SELECT * FROM clientes',(err, clientes) => {
            if(err) {
                res.json(err);
            }
            //console.log(clientes);
            res.render('clientes', {  // el nombre 'cliente' en render es una vista ejs
                data: clientes,
            })           
        } )
    })
    
    //res.send('hola majo');
}

controlador.guardar = (req, res)=> {
    const data = req.body;
    req.getConnection((err, conexion)=> {
        conexion.query('INSERT INTO clientes set ?', [data], (err, clientes) =>{
            if(err) {
                console.log(err);
            }
            console.log(clientes);
            res.redirect('/');
        })
    })
    //res.send('hola guardar');
}

controlador.borrar = (req, res)=> {
    const id = req.params.id;
   // const {id} =req.params;
   req.getConnection((err, conexion)=> {
    conexion.query('DELETE FROM clientes WHERE id = ?', [id], (err, rows) =>{
        if(err) {
            console.log(err);
        }        
        res.redirect('/');
    })
})

}

module.exports = controlador;