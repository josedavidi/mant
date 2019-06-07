$(document).ready(function(){
	$("#sistema").change(function(){
		var sistem = $("#sistema").val();

		$("#subsystem").change(function(){
			var subsistem = $("#subsistema").val();
			
		})

		$("#equipment").change(function(){
			var equipmt = $("#equipos").val();
			
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