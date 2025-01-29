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

(function main(){
    
    console.log(screen.height);
    console.log(screen.width);

    let alturaPorDefecto = screen.height;
    let anchoPorDefecto = screen.width;
    
    if (screen.height <= alturaPorDefecto || screen.width <= anchoPorDefecto) {
        document.querySelector('h3').hidden = false;
        document.body.style.backgroundColor = colorHEX();
    }else{

    }
})()