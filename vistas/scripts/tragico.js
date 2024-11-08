var tabla;

//Función que se ejecuta al inicio
function init(){
	mostrarform(false);
	listar();

	$("#formulario").on("submit",function(e)
	{
		guardaryeditar(e);	
	})
		//Cargamos los items al select categoria
	$.post("../ajax/tragico.php?op=selectAseguradora", function(r){
	            $("#idseguradora").html(r);
	            $('#idseguradora').selectpicker('refresh');

	})
	$.post("../ajax/tragico.php?op=selecTipoUser", function(r){
	            $("#analista").html(r);
	            $('#analista').selectpicker('refresh');
	});
    $('#mAlmacen').addClass("treeview active");
    $('#lCategorias').addClass("active");
}

//Función limpiar
function limpiar()
{
	$("#siniestro").val("");
	$("#poliza").val("");
	$("#fechareporte").val("");
	$("#fechasiniestro").val("");
	$("#vigenciapoliza").val("");
	$("#terminopoliza").val("");
	$("#asegurado").val("");
	$("#reporta").val("");
	$("#atiendeasegurado").val("");
	$("#calle").val("");
	$("#colonia").val("");
	$("#alcandiamupio").val("");
	$("#estado").val("");

	$("#telefonot").val("");
	$("#correo").val("");
	$("#cristales").val("");
	//$("#aseguradora").val("");
	//$("#analista").val("");

	$("#atiende").val("");

	$("#fecharecepcion").val("");
	$("#fechamedicion").val("");
	$("#fechacotizacion").val("");
	$("#fechaautorizacion").val("");
	$("#fecharuta").val("");
	$("#fechacolocacion").val("");
	$("#fechafactura").val("");

	$("#complementopago").val("");
	$("#deducible").val("");
	$("#estatus_siniestro").val("");
	$("#maestro_colocador").val("");
	$("#observaciones").val("");

	
	//$("#print").hide();
	$("#idmovint").val("");
	
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
		$("#btnagregar").hide();
	}
	else
	{
		$("#listadoregistros").show();
		$("#formularioregistros").hide();
		$("#btnagregar").show();
		
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
					url: '../ajax/tragico.php?op=listar',
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
		url: "../ajax/tragico.php?op=guardaryeditar",
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
	$.post("../ajax/tragico.php?op=mostrar",{idmovint : idmovint}, function(data, status)
	{
		data = JSON.parse(data);		
		mostrarform(true);

		$("#siniestro").val(data.siniestro);
		$("#poliza").val(data.poliza);
		$("#fechareporte").val(data.fechareporte);
		$("#fechasiniestro").val(data.fechasiniestro);
	$("#vigenciapoliza").val(data.vigenciapoliza);
	$("#terminopoliza").val(data.terminopoliza);
	$("#nombreseg").val(data.nombreseg);
	$("#reporta").val(data.reporta);
	
	$("#asegurado").val(data.asegurado);
	$("#atiendeasegurado").val(data.atiendeasegurado);
	$("#calle").val(data.calle);
	$("#colonia").val(data.colonia);
	$("#alcandiamupio").val(data.alcandiamupio);
	$("#estado").val(data.estado);

	$("#telefonot").val(data.telefonot);
	$("#correo").val(data. correo);
	$("#cristales").val(data.cristales);
	//$("#aseguradora").val(data.aseguradora);
	//$("#analista").val(data.analista);
	
		$("#analista").val(data.analista);
		$('#analista').selectpicker('refresh');

		$("#idseguradora").val(data.idseguradora);
		$('#idseguradora').selectpicker('refresh');

	$("#atiende").val(data.atiende);

	$("#fecharecepcion").val(data.fecharecepcion);
	$("#fechamedicion").val(data.fechamedicion);
	$("#fechacotizacion").val(data.fechacotizacion);
	$("#fechaautorizacion").val(data.fechaautorizacion);
	$("#fecharuta").val(data.fecharuta);
	$("#fechacolocacion").val(data.fechacolocacion);
	$("#fechafactura").val(data.fechafactura);

	$("#complementopago").val(data.complementopago);
	$("#deducible").val(data.deducible);
	$("#estatus_siniestro").val(data.estatus_siniestro);
	$("#maestro_colocador").val(data.maestro_colocador);
	$("#observaciones").val(data.observaciones);


	$("#idmovint").val(data.idmovint);

	$("#siniestro").attr("readonly",true);
//	$("#siniestro").prop("enabled",false);
 	})
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