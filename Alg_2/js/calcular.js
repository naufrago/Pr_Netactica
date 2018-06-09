function ordenado(arreglo) {
	arreglo.sort(function(a, b){return a-b});
	return arreglo;
	
}

function aleatorio(cant) {
	
    var cantidadNumeros = cant;
	var myArray = []
	while(myArray.length < cantidadNumeros ){
 		var numeroAleatorio = Math.ceil(Math.random()*20);
  		var existe = false;
  		for(var i=0;i<myArray.length;i++){
			if(myArray [i] == numeroAleatorio){
        		existe = true;
        		break;
    		}
  		}
  		if(!existe){
    		myArray[myArray.length] = numeroAleatorio;
  		}

	}
	return myArray
}

function crear_array(a) {
	var array=[];
	if (a==1) {
		
		var can=document.getElementById("can").value;
		

		var array=aleatorio(can);
		
	}else{
		var arr_1=document.getElementById("arr").value;
		var y = arr_1.split(",");
		array=y;
		can=array.length;
	}
	document.writeln("<br><h1>Ratiorg  pose "+can+"  estatuas con estos tamaños "+array +" </h1>");

	var array_n=ordenado(array);
	//document.writeln("<br>nuevo"+ array_n);

	
	var estatuas=[];
	var comprar=[];
	var adicio=0;
	for (var i = 0; i<can; i++) {
		A=array_n[i];
		B=array_n[i+1];
		estatuas.push(A);
		while(A<B-1){
			adicio++;
			A++;
			estatuas.push(A);
			comprar.push(A);
			
		}
		
	}
	total=parseInt(adicio)+parseInt(can);
	document.writeln("<br><h2>debera consegur o comprar "+adicio+" estatuas de estos tamaños "+ comprar+" </h2>");
	document.writeln("<br><h2>y podra tener su coleccion de "+total+" ordenada de menor a mayor la altura de sus estatuas "+ estatuas+" </h2>");
	
    

}