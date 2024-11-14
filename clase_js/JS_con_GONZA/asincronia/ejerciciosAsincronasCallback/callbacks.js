function ejercicio1() {

    function esperarSegundos(segundos,callback){
        setTimeout(()=>{
            console.log(`Han pasado ${segundos} segundos`);
            callback(); //llamamos al callback cuando el temporizador termina.
        },segundos * 1000);
    };

    esperarSegundos(2,()=>{
        console.log("!Listo!");
    });

};

function ejercicio2(){

    function leerArchivo(nombre,callback){
        console.log(`Iniciando la lectura del archivo: ${nombre}`)

        setTimeout(()=>{
            const contenido = `Contenido del archivo ${nombre}`;
            callback(contenido); //Llamamos al callback con el contenido "leído".
        },3000);//Simulamos que la lectura tarda 3 segundos.
    };

    leerArchivo('archivo.txt', contenido => {
        console.log(`Archivo leído: ${contenido}`);
    });

};

function ejercicio3(){

    //callback hell
    function primerPaso(callback){
        setTimeout(() => {
            console.log("Paso 1 completado");
            callback();
        },1000);
    };

    function segundoPaso(callback){
        setTimeout(() => {
            console.log("Paso 2 completado");
            callback();
        },1000);
    };

    function tercerPaso(callback){
        setTimeout(() => {
            console.log("Paso 3 completado");
            callback();
        },1000);
    };

    primerPaso(()=>{
        segundoPaso(()=>{
            tercerPaso(()=>{
                console.log("!Todos los pasos completados!");
            });
        });
    });
};

function ejercicio4(){

    function llamadaApi(callback){
        console.log('Haciendo llamada a la API...');
        
        setTimeout(()=>{
            const datos = { nombre: "juan", edad: "30"}
            callback(datos); //llamamos al callback co los datos recibidos.
        },2000);
    }

    llamadaApi((respuesta) => {
        console.log("Datos recibidos de la API:", respuesta);
    });

};

function ejercicio5(){

    function conectarServidor(callback){
        console.log('Conectando al servidor...');

        setTimeout(()=>{
            const error = false; // Cambia esto a true para simular un error
            
            if(error){
                callback('Error al conectar al servidor', null)
            }else{
                callback(null, 'Conexion exitosa');
            }
        },1500);

        conectarServidor((err, mensaje)=>{
            if(err){
                console.log('Error:',err)
            }else{
                console.log(mensaje);
            }
        });

    }

};

function ejercicio6(){

    function buscarUsuario(id, callback){
        const baseDeDatos = {
            1:{ nombre: "ana", edad: 25 },
            2:{ nombre: "Luis", edad: 32 },
            3:{ nombre: "María", edad: 28 }
        };

        setTimeout(() => {
            const usuario = baseDeDatos[id];
            if(usuario){
                callback(null,usuario);
            } else{
                callback("Usuario no encontrado", null);
            };
        }, 2000);
    }

    buscarUsuario(2, (err, usuario) => {
        if(err){
            console.error("Error:", err);
        } else {
            console.log("Usuario encontrado:", usuario);
        }
    });

};