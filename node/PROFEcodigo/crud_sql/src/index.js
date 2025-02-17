const app = require('./app');

app.listen(app.get('port'), ()=> {
    console.log("servidor escuchando por el puerto", app.get('port'));
})