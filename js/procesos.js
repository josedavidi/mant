$(document).ready(function(){
	$("#sistema").change(function(){
		var sistem = $("#sistema").val();
		var subsistem=null;
		var equipmt=null;
		$("#subsystem").change(function(){
			subsistem = $("#subsistema").val();
			
		})

		$("#meses").change(function(){
		 	 equipmt = $("#equipos").val();
		 	 var month=$('#meses').val();
		


			$.ajax({
				url:"controlador/procesos.php",
				type:"GET",
				data:"meses="+month+"&equipos="+equipmt,
				beforeSend:function(){
					$("#process").html("Por favor espere...");
				},
				success:function(respuesta){
					$("#process").html(respuesta);
				}
			})
		})

	})
})
