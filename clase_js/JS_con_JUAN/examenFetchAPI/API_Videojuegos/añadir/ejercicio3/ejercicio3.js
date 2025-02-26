async function añadirDes() {
    try {
        const desarrollador = {
            nombre: "Larian Studios",
            pais: "Bélgica"
        }
    
        const desarrolladores = await fetch("http://localhost:8000/desarrolladores/",{
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(desarrollador)
        }).then(res => res.json());
    
        return desarrolladores;
    } catch (error) {
        console.log(`ERROR!!: ${error}`);
    }
}

async function peticion() {
  try {
    const desarrollador = await añadirDes();

    const juego = {
        nombre: "Baldur's Gate 3",
        id_desarrollador: desarrollador.id,
        año: 2023,
        genero: "RPG",
    };

    const data = await fetch("http://localhost:8000/videojuegos/", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(juego)
    }).then(res => res.json());

    console.log(data);
  } catch (error) {
    console.log(`ERROR!!: ${error}`);
  }
}

document.querySelector("button").addEventListener("click",peticion);