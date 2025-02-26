async function peticion() {
    try {
        const data = await fetch('http://localhost:8000/videojuegos/')
            .then(res => res.json());

        const juegos = data.filter(juego => juego.año >= 2015 && juego.año <= 2020)
            .sort((a,b) => a.año - b.año);

        console.log(juegos);
    } catch (error) {
        console.log(`ERROR!!: ${error}`);
    }
}

document.querySelector("button").addEventListener("click",peticion);