$(document).ready(function(){
	$('.btn_escucha').click(function(){
	 var equipoId=$('#equipos').val();
	 var procesoId=$(this).parents('tr').find('td')[0].innerHTML;

	 var mes= $('#meses').val();

	$.ajax({
				url:"modelo/ProcesoInforme.php",
				type:"GET",
				data:"equipo="+equipoId+"&proceso="+procesoId+'&mes='+mes,
				beforeSend:function(){
					$('#mensaje').html("Por favor espere...");
				},
				success:function(respuesta){
					$("#mensaje").html(respuesta);
				}
			})
	})


})