let set;
let hora = document.querySelector('#hora');
let minuto = document.querySelector('#minuto');
let segundo = document.querySelector('#segundo');

const iniciar = document.querySelector('#iniciar');
const pausar = document.querySelector('#pausar');
const reiniciar = document.querySelector('#reiniciar');
let pausa = false;

let h = 0,m = 0,s = 0;

function actualizarTiempo() {
    segundo.textContent = s.toString().padStart(2, "0");
    minuto.textContent = m.toString().padStart(2, "0");
    hora.textContent = h.toString().padStart(2, "0");
}

iniciar.addEventListener("click",()=>{
// este if es necesario, porque de lo contrario se me acumulan varios Interval saturandolo.
    if (!set) {
        set = setInterval(() => {
            if (!pausa) {
                s++;
                if (s >= 60) {
                    s = 0;
                    m++;
                    if (m >= 60) {
                        m = 0;
                        h++;
                    }
                }
                actualizarTiempo();
            }
        }, 1000);
    }else{
//este else es para que reanude el cronometro sin crear varios interval para que no se sature
        pausa = false;
    }
});

pausar.addEventListener("click",()=>{
    pausa = true;
});

reiniciar.addEventListener("click",()=>{
    clearInterval(set);
    set = null;
    pausa = false;
    h = 0;
    m = 0;
    s = 0;
    actualizarTiempo();
});