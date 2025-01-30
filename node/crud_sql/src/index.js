/* Por lo general se modulariza todo en otros archivos y en el index solo conectan cosas, 
ya que esto se haec por buenas practicas. */
const app = require('./app');

/* app.get('port') es la variable que establecimos como configuracion en la app.js */
app.listen(app.get('port'), ()=>{
    console.log("servidor escuchando por el puerto", app.get('port'));    
});

