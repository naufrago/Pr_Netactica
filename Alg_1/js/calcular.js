function ordenado(arreglo, tam, pos) {
	var ban=1;
	if (pos<tam-1) {
		if (arreglo[pos]<=arreglo[pos+1]) {
			return ordenado(arreglo,tam,pos+1)
		}else{
			ban=0;
			return ban;
		}
	}else{
		return ban;
	}
	
}

function crear_array(a) {
	var array=[];
	if (a==1) {
		var min=document.getElementById("min").value;
		var max=document.getElementById("max").value;
		var can=document.getElementById("can").value;
		

		
		for (var i = 0; i <can; i++) {
			var randon=Math.round(Math.random()*(max-min)+parseInt(min));
			array.push(randon);
		}
		
		
	}else{
		var arr_1=document.getElementById("arr").value;
		var y = arr_1.split(",");
		array=y;
		can=array.length;
	}
    var n=0;
    var bandera=0;
    document.writeln("<br><h1>El array analizado es ["+ array+"]</h1>");
    
    while (n<can){
    	var piv=array[n];
    	var dato=array.slice();
    	//document.writeln("<br>"+ dato);
    	dato.splice(n,1);
    	ban=ordenado(dato,can-1,0);
    	//document.writeln("<br>el dato"+ dato+" y n "+ n)
    	
    	n++;
    	if (ban==1) {
    		document.writeln("<br><h2>este valor se podria retirar = "+ piv+" y dejar los demas</h2>");
    		bandera++;
    	}
    }
    if (bandera>0) {
    	document.writeln("<br><br><h2>La secuencia puede ser creciente</h2>");
    }else{
    	document.writeln("<br><br><h2>No hay forma, la secuencia no puede ser creciente</h2>");
    }

}