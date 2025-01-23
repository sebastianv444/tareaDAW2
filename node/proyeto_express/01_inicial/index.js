const express = require("express");

const app = express();

//middleware

app.use((req,res, next)=>{
    /* recuerda que las querys son los que como parametros en la url despues de un ? */
    if(req.query.login == 'sebas'){
        // el next() sale de este .use() y sigue.
        next();
    }else{
        res.send("no autorizado");
    }
    /* OJO: es importante poner el next() porque osino se te queda el codigo en este use y no
    pasa al siguiente. */
})

app.get('/dashboard',(req,res)=>{
    res.send('estás en el dashboard');
})

app.listen(3000);