async function mostrarDesarrolladores(){
    try {
        const data = await fetch('http://localhost:8000/desarrolladores/')
            .then(res => res.json());

        data.forEach(des => {
            document.querySelector("select").innerHTML += `
                <option value="${des.id}">${des.nombre}</option>
            `;
        });
    } catch (error) {
        console.log(`ERROR!!: ${error}`);
    }
}

mostrarDesarrolladores();

async function peticion(event) {
    event.preventDefault();
    const formData = new FormData(this);
    const jsonData = Object.fromEntries(formData.entries());

    if(jsonData.nombre === "" || jsonData.año === "" || jsonData.genero === ""){
        return alert("NO DEJES CAMPOS EN BLANCO!!");
    }

    console.log(jsonData);
    try {
        const req = await fetch("http://localhost:8000/videojuegos/",{
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(jsonData)
        });
        
        if (!req.ok) {
            throw new Error(`ERROR!! status: ${req.status}`);
        }

    } catch (error) {
        console.log(`ERROR!!: ${error}`);
    }
}

document.querySelector("form").addEventListener("submit",peticion);