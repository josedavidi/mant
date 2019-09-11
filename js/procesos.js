$(document).ready(function(){
	$("#sistema").change(function(){

		var sistem = $("#sistema").val();
		var subsistem=null;
		var equipmt=null;
		$("#subsystem").change(function(){
			subsistem = $("#subsistema").val();
			
		})

		

		$("#meses").change(function(){

			var mesElegido = $(this).val();
			
		 	 equipmt = $("#equipos").val();
		 	 $('#equipo_id').val(equipmt);
		 	 $('#id_mes').val(mesElegido);

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
