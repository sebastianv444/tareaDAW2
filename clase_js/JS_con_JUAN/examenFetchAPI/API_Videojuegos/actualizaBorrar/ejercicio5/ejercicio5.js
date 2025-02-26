async function peticion() {
    try {
        const videojuegos = await fetch("http://localhost:8000/videojuegos/")
            .then(res => res.json());

        const { desarrollador } = videojuegos.find(juego => juego.nombre === "The Last of Us");

        const req = await fetch(`http://localhost:8000/desarrolladores/${desarrollador.id}`,{
            method: "DELETE"
        }).then(res => res.json());

        console.log(req);
    } catch (error) {
        console.log(`ERROR!!: ${error}`);
    }
}

document.querySelector("button").addEventListener("click",peticion)