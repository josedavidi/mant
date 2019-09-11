$(document).ready(function(){
	$('#periodo').change(function(){
		var equipo_id = $('#equipos').val();
		var periodo_id = $(this).val();

		$.ajax({
			url:'controlador/mostrarInformes.php',
			data:'equipoId='+equipo_id+'&periodoId='+periodo_id,
			beforesend:function(){
				$('#verInformes').html('cargando...');
			},
			success:function(respuesta){
				$('#verInformes').html(respuesta);
			}
		})

	})
})