const express = require('express');
const alumnoController = require('../controllers/AlumnoController');
const router = express.Router();

router.get('/',alumnoController.getAlumnos);

router.get('/alumnos/:id',alumnoController.getAlumnoID);

router.post('/alumnos/crear', alumnoController.createAlumno);

router.post('/alumnos/borrar/:id', alumnoController.deleteAlumnoID);

module.exports = router;