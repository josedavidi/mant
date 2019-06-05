$(document).ready(function(){
	$("#sistema").change(function(){
		var system = $("#sistema").val();
		
		$.ajax({
			type:"GET",
			url:"controlador/subsistema.php",
			data:"idsistema="+system,
			beforeSend:function(){
				$("#subsystem").html("Por favor espere...");
			},
			success:function(respuesta){
				$("#subsystem").html(respuesta);
			}
		})
	})
	
})