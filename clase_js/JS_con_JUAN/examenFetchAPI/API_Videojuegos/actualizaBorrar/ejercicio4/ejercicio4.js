async function peticion() {
    try {
        const juegoEspecifico = await fetch('http://localhost:8000/videojuegos/79')
            .then(res => res.json());

        const actualizar = {
            nombre: "Hollow Knight: Silksong",
            id_desarrollador: juegoEspecifico.desarrollador.id,
            año: 4087,
            genero: juegoEspecifico.genero
        }
        
        const req = await fetch(`http://localhost:8000/videojuegos/${juegoEspecifico.id}`,{
            method: "PUT",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(actualizar)
        }).then(res => res.json());

        console.log(req);
    } catch (error) {
        console.log(`ERROR!!: ${error}`);
    }
}

document.querySelector("button").addEventListener("click",peticion)