document.addEventListener("DOMContentLoaded", () => {
    const generar = document.getElementById("generar");
    const guardar = document.getElementById("guardar");
    const contraseña = document.querySelector("p");
    const h3 = document.querySelector("h3");

    function generarContraseña() {
        const caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()-_=+";
        let contraseña = "";
        for (let i = 0; i < 16; i++) {
            const random = Math.floor(Math.random() * caracteres.length);
            contraseña += caracteres[random];
        }
        return contraseña;
    }

    function mostrarContraseña() {
        const nuevaContraseña = generarContraseña();
        contraseña.textContent = nuevaContraseña;
        contraseña.hidden = false;
        h3.hidden = false;
        guardar.hidden = false;
    }

    function copiarAlPortapapeles() {
        navigator.clipboard.writeText(contraseña.textContent)
            .then(() => alert("Contraseña copiada al portapapeles"))
            .catch(error => console.error("Error al copiar:", error));
    }

    generar.addEventListener("click", mostrarContraseña);
    guardar.addEventListener("click", copiarAlPortapapeles);
});