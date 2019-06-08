$(document).ready(function(){
	$("#sistema").change(function(){
		var sistem = $("#sistema").val();
		var subsistem=null;
		var equipmt=null;
		$("#subsystem").change(function(){
			subsistem = $("#subsistema").val();
			
		})

		$("#equipment").change(function(){
		 	 equipmt = $("#equipos").val();
			$.ajax({
				url:"controlador/procesos.php",
				type:"GET",
				data:"sistema="+sistem+"&subsistema="+subsistem+"&equipo="+equipmt,
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
