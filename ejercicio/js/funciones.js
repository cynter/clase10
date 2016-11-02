function GuardarCD()
{
		//alert('hola');
		//return;

		var cantante=$("#cantante").val();
		var titulo=$("#titulo").val();
		var anio=$("#anio").val();

		//alert(cantante);
		//alert(titulo);
		//alert(anio);	
		//alert("hola");	
		

		$.ajax({
			url:"nexo.php",
			type:"post",
			data:{
				queHacer:"GuardarCD",
				cantante:cantante,
				titulo:titulo,
				anio:anio	
			}
		}).then(function ok(exito){
			//alert("OK");
			alert(exito);

		},function fail(error){
			alert("ERROR");
		});
}