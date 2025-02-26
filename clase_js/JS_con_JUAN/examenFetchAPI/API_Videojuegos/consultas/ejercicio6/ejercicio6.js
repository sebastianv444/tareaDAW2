async function peticion() {
    try {
        const data = await fetch('http://localhost:8000/videojuegos/')
            .then(res => res.json());

        const juegos = data.filter(juego => juego.desarrollador.pais === "Japón")
            .map(game => game.nombre);

        console.log(juegos);
    } catch (error) {
        console.log(`ERROR!!: ${error}`);
    }
}

document.querySelector("button").addEventListener("click",peticion);