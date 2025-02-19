const crearComentario = (req,res) => {
    const body = req.body;
    req.getConnection((err, conexion)=> {
        conexion.query('SELECT id FROM clientes WHERE direccion = ?',[body.email],(err, clientes) => {
            if(clientes.length === 0){
                res.render('errorEmail',{
                    email: body.email
                })
            }

            if (clientes.length >= 1) {
                const id = clientes[0].id;

                conexion.query('INSERT INTO comentarios (cliente_id,comentario) VALUES (?,?)',[id,body.comentario],(err,comentarios)=>{
                    if(err){
                        res.status(200).render('errorEmail',{
                            email: body.email
                        })
                    }
                    console.log('paso por aqui');
                    
                    console.log(clientes);
                    res.redirect('/');
                })
            }
           
        })
    })
}

const mostrarComentario = (req,res) => {
    res.status(200).render('crearComentario');
}

const listarComentarios = (req,res) => {
    req.getConnection((err, conexion)=> {
        // deberíamos controlar el error de la conexión
        conexion.query('SELECT c.nombre,c.direccion,t.tipo,co.comentario,co.fecha FROM tipo_clientes AS t INNER JOIN clientes AS c ON t.id = c.tipo_cliente_id INNER JOIN comentarios AS co ON c.id = co.cliente_id',(err, consulta) => {
            if(err) {
                res.json(err);
            }
            //console.log(clientes);
            res.render('listarComentarios', {  // el nombre 'cliente' en render es una vista ejs
                data: consulta,                
            })           
        } )
    })
}

module.exports = {
    crearComentario,
    mostrarComentario,
    listarComentarios
}