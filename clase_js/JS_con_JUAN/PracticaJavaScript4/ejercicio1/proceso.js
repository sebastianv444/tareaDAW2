function generarLetra(){
	let letras = ["a","b","c","d","e","f","0","1","2","3","4","5","6","7","8","9"];
	let numero = (Math.random()*15).toFixed(0);
	return letras[numero];
}
	
function colorHEX(){
	let coolor = "";
	for(var i=0;i<6;i++){
		coolor = coolor + generarLetra() ;
	}
	return "#" + coolor;
}

document.querySelector("#fondo").addEventListener('click',()=>{
    console.log(colorHEX());
    
    document.body.style.backgroundColor = colorHEX();
});