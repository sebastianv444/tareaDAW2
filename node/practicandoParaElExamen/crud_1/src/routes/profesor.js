const expres = require('express');
const router = expres.Router();

router.get('/profesores',(req,res) => {
    res.send("Bienvenido Profesor");
});

module.exports = router;