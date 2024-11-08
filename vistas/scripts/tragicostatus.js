var tabla;

//Función que se ejecuta al inicio
function init(){
	mostrarform(false);
	listar();

	$("#formulario").on("submit",function(e)
	{
		guardaryeditar(e);	
	});
    $('#mAlmacen').addClass("treeview active");
  //  $('#lCategorias').addClass("active");
}

//Función limpiar
function limpiar()
{
	$("#idstatus").val("");
	$("#idsiniestro").val("");

	//$("#asegurado").val("");
	//$("#aseguradora").val("");
	//$("#analista").val("");
	
		$("#fechasta1").val("");
		$("#observastatus1").val("");
			
		$("#fechasta2").val("");
		$("#observastatus2").val("");
		
		$("#fechasta3").val("");
		$("#observastatus3").val("");
		
		$("#fechasta4").val("");
		$("#observastatus4").val("");
		
		$("#fechasta5").val("");
		$("#observastatus5").val("");
		
		$("#fechasta6").val("");
		$("#observastatus6").val("");

	//$("#print").hide();
	$("#idmovint").val("");
	
//		$("#siniestro").val("");
	
	

	
}

//Función mostrar formulario
function mostrarform(flag)
{
	limpiar();
	if (flag)
	{
		$("#listadoregistros").hide();
		$("#formularioregistros").show();
		$("#btnGuardar").prop("disabled",false);
		//$("#btnagregar").hide();
		
		//listarSiniestros();
	}
	else
	{
		$("#listadoregistros").show();
		$("#formularioregistros").hide();
		//$("#btnagregar").show();
		
	}
}

//Función cancelarform
function cancelarform()
{
	limpiar();
	mostrarform(false);
}

//Función Listar
function listar()
{
	tabla=$('#tbllistado').dataTable(
	{
		"lengthMenu": [ 5, 10, 25, 75, 100],//mostramos el menú de registros a revisar
		"aProcessing": true,//Activamos el procesamiento del datatables
	    "aServerSide": true,//Paginación y filtrado realizados por el servidor
	    dom: '<Bl<f>rtip>',//Definimos los elementos del control de tabla
	    buttons: [		          
		            'copyHtml5',
		            'excelHtml5',
		            'csvHtml5',
		            'pdf'
		        ],
		"ajax":
				{
					url: '../ajax/tragicostatus.php?op=listar',
					type : "get",
					dataType : "json",						
					error: function(e){
						console.log(e.responseText);	
					}
				},
		"language": {
            "lengthMenu": "Mostrar : _MENU_ registros",
            "buttons": {
            "copyTitle": "Tabla Copiada",
            "copySuccess": {
                    _: '%d líneas copiadas',
                    1: '1 línea copiada'
                }
            }
        },
		"bDestroy": true,
		"iDisplayLength": 5,//Paginación
	    "order": [[ 0, "desc" ]]//Ordenar (columna,orden)
	}).DataTable();
}



 



//Función para guardar o editar

function guardaryeditar(e)
{
	e.preventDefault(); //No se activará la acción predeterminada del evento
	$("#btnGuardar").prop("disabled",true);
	var formData = new FormData($("#formulario")[0]);

	$.ajax({
		url: "../ajax/tragicostatus.php?op=guardaryeditar",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    {                    
	          bootbox.alert(datos);	          
	          mostrarform(false);
	          tabla.ajax.reload();
	    }

	});
	limpiar();
}



function mostrar(idmovint)
{
	$.post("../ajax/tragicostatus.php?op=mostrar",{idmovint : idmovint}, function(data, status)
	{
	
	
	data = JSON.parse(data);		
	mostrarform(true);

	$("#idstatus").val(data.idstatus);
	$("#idsiniestro").val(data.idsiniestro);
	$("#siniestro").val(data.siniestro);
	
	
	$("#fechasta1").val(data.fechasta1);
	$("#observastatus1").val(data.observastatus1);
	
	$("#fechasta2").val(data.fechasta2);
	$("#observastatus2").val(data.observastatus2);

	$("#fechasta3").val(data.fechasta3);
	$("#observastatus3").val(data.observastatus3);

	$("#fechasta4").val(data.fechasta4);
	$("#observastatus4").val(data.observastatus4);

	$("#fechasta5").val(data.fechasta5);
	$("#observastatus5").val(data.observastatus5);
	
	$("#fechasta6").val(data.fechasta6);
	$("#observastatus6").val(data.observastatus6);
	
	$("#idmovint").val(data.idmovint);
	//$("#idarticulo").val(data.idarticulo);
	$("#siniestro").attr("readonly",true);
	$("#nombreseg").attr("readonly",true);
	
//	$("#siniestro").prop("enabled",false);

	$("#asegurado").val(data.asegurado);
	$("#nombreseg").val(data.nombreseg);
	////$("#analista").val(data.analista);

 	});
	

	
}

//Función para desactivar registros
function desactivar(idmovint)
{
	bootbox.confirm("¿Está Seguro de desactivar la siniestro?", function(result){
		if(result)
        {
        	$.post("../ajax/tragico.php?op=desactivar", {idmovint : idmovint}, function(e){
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
        }
	})
}

//Función para activar registros
function activar(idmovint)
{
	bootbox.confirm("¿Está Seguro de activar la siniestro?", function(result){
		if(result)
        {
        	$.post("../ajax/tragico.php?op=activar", {idmovint : idmovint}, function(e){
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
        }
	})
}


init();