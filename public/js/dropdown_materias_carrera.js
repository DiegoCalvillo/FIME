$("#carrera").change(function(event){
	$.get("materias/"+event.target.value+"", function(response, carrera){
		$("#materias").empty();

		$("#materias").append("<option value= '0'>Seleccione la materia</option>");
		for(i=0; i<=response.length; i++)
		{
			if(response[i].estatus_id == 1)
			{
				$("#materias").append("<option value= '"+response[i].id+"'>"+response[i].nombre_materia+"</option>");
			}
		}
	});
});