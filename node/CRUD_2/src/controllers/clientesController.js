const controlador = {};

controlador.listar = (req, res) => {
  // podemos usar lo siguiente por express-myconnection que instalamos como otra dependencia
  req.getConnection((err, conexion) => {
    // deberiamos controolar el error de la conexión
    /* en el segundo parametro es donde se recoge la respuesta de la consulta a la base
        de datos, de manera que clientes tendra la respuesta completa en un array con los datos. */
    conexion.query("SELECT * FROM clientes", (err, clientes) => {
      if (err) {
        res.json(err);
      }
      console.log(clientes);
      /* render solo busca views con la configuracion dada. Recuerda que nosotros en 
            app.js esteblecemos una configuracion con el nombre 'views' que es donde le 
            establecemos la ruta en views que luego buscara .render() */
      // es para rederizar la vista en el cliente a mostrar
      res.render("clientes", {
        // el nombre 'cliente' en render e una vista ejs
        data: clientes,
      });
    });
  });

  // res.send("hola majo");
};

controlador.guardar = (req, res) => {
  const data = req.body;
  req.getConnection((err, conexion) => {
    /* en el segundo parametro es donde se recoge la respuesta de la consulta a la base
        de datos, de manera que clientes tendra la respuesta completa en un array con los datos. */
    conexion.query("INSERT INTO clientes set ?", [data], (err, clientes) => {
        if(err){
            console.log(err);
        }
        console.log(clientes);
        res.redirect('/');
    });
  });
};

controlador.borrar = (req, res) => {
  const id = req.params.id;
  const data = req.body.query;
  console.log(data);
  // const { id } = req.params;
  // la interrogacíon se remplaza por el que especificaste en los '[]'.
  req.getConnection('DELETE FROM clientes WHERE id = ?',[id], (err,rows)=>{
    if(err){
      console.log(err);
    }
    res.redirect('/');
  });
};

module.exports = controlador;
