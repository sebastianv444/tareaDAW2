const conexion = require('../config/db');
/* el modulo util es nativo de node.js(no se necesita instalar)*/
const { promisify } = require('util');

/* 
    promisify: convierte un callback en una promesa
    bind(): asegura que la const query use la conexion, si no lo uso,
    cuando llame a query() intentara ejecutarse sun saber a que conexion
    pertenece, lo que generara un error.
*/

const query = promisify(conexion.query).bind(conexion);

const getAlumnos = async (req, res) => {
    try {
        const results = await query('SELECT * FROM alumnos');
        res.status(200).render('index', { alumnos: results });
    } catch (error) {
        console.error(error);
        res.status(500).send(error);
    }
};

const getAlumnoID = async (req,res) => {
    try {
        const id = req.params.id;
        const resultado = await query('SELECT * FROM alumnos WHERE id_alumno = ?',[id]);
        res.status(200).json(resultado);
    } catch (error) {
        console.error(error);
        res.status(500).send(error);
    }
}

const createAlumno = async (req,res) => {
    try {
        const body = req.body;
        const { nombre, apellido, fecha, email } = body;
        await query('INSERT INTO alumnos (nombre, apellido, fecha_nacimiento, email) VALUES (?, ?, ?, ?)', 
            [nombre, apellido, fecha, email]);
        res.status(200).redirect('/');
    } catch (error) {
        console.error(error);
        res.status(500).send(error);
    }
}

const deleteAlumnoID = async (req,res) => {
    try {
        const { id } = req.params;
        await query('DELETE FROM alumnos WHERE id_alumno = ?',[id])
        res.status(204).redirect('/');
    } catch (error) {
        console.error(error);
        res.status(500).send(error);
    }
}

// esta seria la forma tradicional con callbacks
/* const getAlumnosTradicional = (req, res) => {
    conexion.query('SELECT * FROM alumnos', (error, results) => {
        if (error) {
            console.error(error);
            return res.status(500).send(error);
        }
        res.status(200).json(results);
    });
}; */

module.exports = {
    getAlumnos,
    getAlumnoID,
    deleteAlumnoID,
    createAlumno
};