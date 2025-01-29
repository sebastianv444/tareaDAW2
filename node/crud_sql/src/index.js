const app = require('./app');

/* app.get('port') es la variable que establecimos como configuracion en la app.js */
app.listen(app.get('port'), ()=>{
    console.log("servidor escuchando por el puerto", app.get('port'));    
});