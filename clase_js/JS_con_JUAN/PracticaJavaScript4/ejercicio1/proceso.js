function generarLetra(){
	let letras = ["a","b","c","d","e","f","0","1","2","3","4","5","6","7","8","9"];
	/* el toFixed(0) es para quitarle los decimales, si le agregara un numero distinto
	al 0 como un 2, me cogeria solo 2 decimales despues del "." , pude haber usado Math.trunc
	,pero opte por esto para ir probando mas cosas en js. */
	let numero = (Math.random()*15).toFixed(0);
	return letras[numero];
}
	
function colorHEX(){
	let color = "";
	for(var i=0;i<6;i++){
		color += generarLetra() ;
	}
	return "#" + color;
}

document.querySelector("#fondo").addEventListener('click',()=>{
    console.log(colorHEX());
    
    document.body.style.backgroundColor = colorHEX();
});