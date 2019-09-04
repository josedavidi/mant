$(document).ready(function(){
	$('.btn_escucha').click(function(){
		var equipoId = $('#equipos').val();
		var procesoId = $(this).parents('tr').find('td')[0].innerHTML;

		$.ajax({
			type:'GET',
			url:'modelo/ProcesoInforme.php',
			data:'equipo='+equipoId+'&proceso='+procesoId,
			beforeSend:function(){
				$('#mensaje').html('Por favor espere...');
			},
			success:function(respuesta){
				$('#mensaje').html(respuesta);
			}
		})

	})
})