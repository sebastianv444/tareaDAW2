require('dotenv').config();

//varibles de entorno
module.exports = {
    app:{
        /* process se tu sistema, .env es el archivo con las varibles de entorno y el 
        .PORT es la propiedad definida en el archivo .env */
        port: process.env.PORT || 4000
    },
    mysql:{
        host: process.env.MYSQL_HOST || 'localhost',
        user: process.env.MYSQL_USER || 'root',
        password: process.env.MYSQL_PASSWORD || '',
        database: process.env.MYSQL_DB || 'ejemplo'
    }
}