
function crear_array() {
	var array=[];
	var cadena=[];
	var a=document.getElementById("can").value;
	var msg=[];
	var mensg, text;
	//ciudad Local
	for (var i = 0; i < a; i++) {
		
		var arreglo=[];

		//ciudad vecina
		for (var j=0; j < a; j++) {
			if (i==j) {
				arreglo.push(false);
			}else{
				var dato=false;
				var boolean=Math.floor(Math.random() * 2);
				if (boolean==1) {
					dato=true;
					ix=i;
					jy=j;
					ii=parseInt(ix)+1;
					jj=parseInt(jy)+1;
					text="<br>la ciudad "+ii+" tiene salida a la ciudad "+jj;
					mensg=i;
				}
				arreglo.push(dato);
				cadena.push(text);
				text="";
			}

		}
		msg.push(mensg);
		mensg="";
		//document.writeln("<br>"+arreglo+"");
		array.push(arreglo);
	}
	document.writeln("<center><h1>********** Ciudades vecinas********</h1></center><br>")
	for (var x=0; x < a; x++) {
		r=x+1;
		document.writeln("<center><h1>ciudad Local:"+r+"-["+array[x]+"]</h1></center>");
   
	}
	aa=parseInt(a);
	document.writeln("<br><center>************************************************************************</center><br>");
	if (msg.length==aa) {
		document.writeln("<h2><center>El sistemas de carreterras es lo suficientemente BUENO </h2></center>");
	}else{
		document.writeln("<br><br><h1><center>El sistemas de carreterras debe ser replanteado hay 1 o masciudades incomunicadas</h1></center>");
		
	}
	document.writeln("<br><center>************************************************************************</center><br>");


	//analisis de rutas

	for (var w=1; w < cadena.length; w++) {
		document.writeln(cadena[w]);
	}

	//document.writeln("<br>"+msg);



}
