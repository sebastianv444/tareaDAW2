const option1 = document.querySelector("#option1");
const option2 = document.querySelector("#option2");
const dropdown = document.querySelector("#dropdown");

option1.addEventListener('change',()=>{

    if(option1.checked == true){
        option2.checked = false;
        dropdown.innerHTML =`
            <option value="Rojo">Rojo</option>
            <option value="azul">azul</option>
            <option value="amarillo">amarillo</option>
        `;
        dropdown.style.display = "block";
    } else {
        
    }

});

option2.addEventListener('change',()=>{
    if(option2.checked == true){
        option1.checked = false;
        dropdown.innerHTML =`
            <option value="Rojo">perro</option>
            <option value="azul">gato</option>
            <option value="amarillo">amarillo</option>
        `;
        dropdown.style.display = "block";
    }
});
