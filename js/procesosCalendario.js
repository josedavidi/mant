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
				url:"controlador/calendarioProcesos.php",
				type:"GET",
				data:"sistema="+sistem+"&subsistema="+subsistem+"&equipo="+equipmt,
				beforeSend:function(){
					$("#processCalendario").html("Por favor espere...");
				},
				success:function(respuesta){
					$("#processCalendario").html(respuesta);
				}
			})
		})

	})
})
