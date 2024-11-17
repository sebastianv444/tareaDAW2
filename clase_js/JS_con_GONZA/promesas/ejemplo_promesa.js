const prometoIrAComer = new Promise((ireAComer,noIreAComer)=>{
    let noEstoyMuyOcupado = false;
    setTimeout(() => {
        if(noEstoyMuyOcupado){
            //resolve
            ireAComer(`por supuesto que iré a comer,
                reserva en un estrella michelin, pagas tú`);
        }else{
            //reject
            noIreAComer("Lo siento, pero no me da la vida, estoy muuuuy ocupado");
        }
    },1000);
});

//consumiendo promesa
prometoIrAComer
    .then((siVoyAcomer)=>{
        console.log(siVoyAcomer); //esto ocurre si se llama a resolve
    })
    .catch((NoVoyAcomer)=>{
        console.log(NoVoyAcomer); //esto ocurre si se llama a reject
    })
    //el finally se ejecuta siempre, da igual que se haya retornado el resolve o reject.
    .finally(()=>{
        console.log('finally se ejecuta siempre')
    });

console.log()

/**
 * RECUERDA: aca se ejecuta el ultimo console.log, ya que la promesa lleva todo el proceso
 * fuera y ejecuta todo lo que tenga que ejecutar la promesa y luego lo trae, y en ese
 * transcurso de que la promesa se fue fuera y lo trae ya se a ejecutado el resto de tu codigo,
 * entonces sí, la promesa se ejecuta depues de que el resto de tu codigo ya se haya ejecutado.
 */