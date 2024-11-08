<?php
//Activamos el almacenamiento en el buffer
ob_start();
session_start();

if (!isset($_SESSION["nombre"]))
{
  header("Location: login.html");
}
else
{
require 'header.php';

if ($_SESSION['siniestros']==1)
{
?>
<!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">        
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                          <h1 class="box-title">    Categoría <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button> <a href="../reportes/rptsiniestros.php" target="_blank"><button class="btn btn-info"><i class="fa fa-clipboard"></i> Reporte</button></a>
						   
						  </h1>
                        <div class="box-tools pull-right">
						
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                            <th>OPCIONES</th>
                            
							<th>SINIESTRO</th>
                            <th>FECHARE PORTE</th>
							<th>FECHA SINIESTRO</th>
                            <th>ESTADO</th>
                            <th>ASEGURADO</th>
                            <th>ASEGURADORA</th>
                            <th>ANALISTA</th>
							<th>CREACION</th>
							
                            <th>STATUS</th>
                          </thead>
                          <tbody>                            
                          </tbody>
                          <tfoot>
                            <th>OPCIONES</th>
                            
							<th>SINIESTRO</th>
                            <th>FECHARE PORTE</th>
							<th>FECHA SINIESTRO</th>
                            <th>ESTADO</th>
                            <th>ASEGURADO</th>
                            <th>ASEGURADORA</th>
                            <th>ANALISTA</th>
							<th>CREACION</th>
							
                            <th>STATUS</th>
                          </tfoot>
                        </table>
                    </div>
                    <div class="panel-body" style="height: 650px;" id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST">
                           
						  	<div class="form-group col-lg-10 col-md-2 col-sm-2 col-xs-5">
								<label>EN LOS CAMPOS CON DATOS (*) SON OBLIGATORIOS:</label>
                            </div>
						  
						    <div class="form-group col-lg-3 col-md-2 col-sm-2 col-xs-12">
                            <label>SINIESTRO(*):</label>
                            <input type="hidden" name="idmovint" id="idmovint">
                            <input type="text" class="form-control" name="siniestro" id="siniestro" maxlength="50" placeholder="SINIESTRO" required>
                          </div>
                          <!--
						  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Categoría(*):</label>
                            <select id="idcategoria" name="idcategoria" class="form-control selectpicker" data-live-search="true" required></select>
                          </div> -->
                          <div class="form-group col-lg-2 col-md-6 col-sm-3 col-xs-12">
                            <label>POLIZA(*):</label>
                            <input type="text" class="form-control" name="poliza" id="poliza" maxlength="38" placeholder="POLIZA" required>
                          </div>
                       <div class="form-group col-lg-2 col-md-4 col-sm-4 col-xs-12">
                            <label>FECHA REPORTE(*):</label>
                            <!-- <input type="date" class="form-control" name="fecha_hora" id="fecha_hora" required pattern="\d{4}-\d{2}-\d{2}" value="<?php echo date('Y-m-d', strtotime("+ 20 day")); ?>">  --->
							<input type="date" class="form-control" name="fechareporte" id="fechareporte" required pattern="\d{4}-\d{2}-\d{2}" value="<?php echo date('Y-m-d'); ?>">
                          </div>
						  
                          <div class="form-group col-lg-2 col-md-4 col-sm-4 col-xs-12">
                            <label>FECHA SINIESTRO(*):</label>
                            <input type="date" class="form-control" name="fechasiniestro" id="fechasiniestro" required="\d{4}-\d{2}-\d{2}">
                          </div>
						  <div class="form-group col-lg-2 col-md-4 col-sm-4 col-xs-12">
                            <label>VIGENCIA POLIZA:</label>
                            <input type="date" class="form-control" name="vigenciapoliza" id="vigenciapoliza" >
                          </div>
						  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>ANALISTA(*):</label>
                            <select id="analista" name="analista" class="form-control selectpicker" data-live-search="true" required></select>
                          </div>
						  
						  <div class="form-group col-lg-2 col-md-4 col-sm-4 col-xs-12">
                            <label>TERMINO POLIZA:</label>
                            <input type="date" class="form-control" name="terminopoliza" id="terminopoliza"  >
                          </div>
						  
						   <div class="form-group col-lg-3 col-md-2 col-sm-6 col-xs-12">
                            <label>ASEGURADO(*):</label>
                            <input type="text"  align="center" class="form-control" name="asegurado" id="asegurado" maxlength="500" placeholder="ASEGURADO" required>
                          </div>
						 <div class="form-group col-lg-3 col-md-2 col-sm-6 col-xs-12">
                            <label>REPORTA:</label>
                            <input type="text"  align="center" class="form-control" name="reporta" id="reporta" maxlength="200" placeholder="REPORTA" required>
                          </div>
						
						<div class="form-group col-lg-3 col-md-2 col-sm-6 col-xs-12">
                            <label>ATIENDE A SEGURADO(*):</label>
                            <input type="text"  align="center" class="form-control" name="atiendeasegurado" id="atiendeasegurado" maxlength="200" placeholder="ATIENDE A SEGURADO" required>
                          </div>
						
						
							<div class="form-group col-lg-3 col-md-2 col-sm-6 col-xs-12">
                            <label>CALLE(*):</label>
                            <input type="text"  align="center" class="form-control" name="calle" id="calle" maxlength="250" placeholder="CALLE" required >
                          </div>
						 <div class="form-group col-lg-3 col-md-2 col-sm-6 col-xs-12">
                            <label>COLONIA, CODIGO POSTAL(*):</label>
                            <input type="text"  align="center" class="form-control" name="colonia" id="colonia" maxlength="250" placeholder="COLONIA" required>
                          </div>
						
						<div class="form-group col-lg-3 col-md-2 col-sm-6 col-xs-12">
                            <label>ALCANDIA / MUNICIPIO(*):</label>
                            <input type="text"  align="center" class="form-control" name="alcandiamupio" id="alcandiamupio" maxlength="150" placeholder="ALCANDIA / MUNICIPIO" required>
                          </div>
						  	<div class="form-group col-lg-3 col-md-2 col-sm-6 col-xs-12">
                            <label>ESTADO(*):</label>
                            <input type="text"  align="center" class="form-control" name="estado" id="estado" maxlength="150" placeholder="ESTADO" required>
                          </div>
						  
						  
						  <div class="form-group col-lg-3 col-md-2 col-sm-6 col-xs-12">
                            <label>TELEFONO(*):</label>
                            <input type="text"  align="center" class="form-control" name="telefonot" id="telefonot" maxlength="250" placeholder="TELEFONO" required>
                          </div>
						 <div class="form-group col-lg-3 col-md-2 col-sm-6 col-xs-12">
                            <label>CORREO(*):</label>
                            <input type="text"  align="center" class="form-control" name="correo" id="correo" maxlength="250" placeholder="CORREO" required>
                          </div>
						
						<div class="form-group col-lg-3 col-md-2 col-sm-6 col-xs-12">
                            <label>CRISTALES(*):</label>
                            <input type="text"  align="center" class="form-control" name="cristales" id="cristales" maxlength="300" placeholder="CRISTALES" required>
                          </div>
				 
						  
						   <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>ASEGURADORA(*):</label>
                            <select id="idseguradora" name="idseguradora" class="form-control selectpicker" data-live-search="true" required></select>
                          </div>
						  
						   <div class="form-group col-lg-3 col-md-2 col-sm-6 col-xs-12">
                            <label>ATIENDE:</label>
                            <input type="text"  align="center" class="form-control" name="atiende" id="atiende" maxlength="150" placeholder="ATIENDE">
                          </div>
						  
						  
						
						
						    <div class="form-group col-lg-2 col-md-4 col-sm-4 col-xs-12">
                            <label>FECHA RECEPCION:</label>
                            <input type="date" class="form-control" name="fecharecepcion" id="fecharecepcion" >
                          </div>
						
						  <div class="form-group col-lg-2 col-md-4 col-sm-4 col-xs-12">
                            <label> FECHA MEDICION:</label>
                            <input type="date" class="form-control" name="fechamedicion" id="fechamedicion" >
                          </div>
						                            <div class="form-group col-lg-2 col-md-4 col-sm-4 col-xs-12">
                            <label>FECHA COTIZACION:</label>
                            <input type="date" class="form-control" name="fechacotizacion" id="fechacotizacion" >
                          </div>
						  <div class="form-group col-lg-2 col-md-4 col-sm-4 col-xs-12">
                            <label>FECHA AUTORIZACION:</label>
                            <input type="date" class="form-control" name="fechaautorizacion" id="fechaautorizacion" >
                          </div>
						  <div class="form-group col-lg-2 col-md-4 col-sm-4 col-xs-12">
                            <label> FECHA RUTA:</label>
                            <input type="date" class="form-control" name="fecharuta" id="fecharuta" >
                          </div>
						  <div class="form-group col-lg-2 col-md-4 col-sm-4 col-xs-12">
                            <label>FECHA COLOCACION:</label>
                            <input type="date" class="form-control" name="fechacolocacion" id="fechacolocacion" >
                          </div>
						    <div class="form-group col-lg-2 col-md-4 col-sm-4 col-xs-12">
                            <label> FECHA FACTURACION:</label>
                            <input type="date" class="form-control" name="fechafactura" id="fechafactura" >
                          </div>
						
						
						<div class="form-group col-lg-2 col-md-6 col-sm-3 col-xs-12">
                            <label>COMPLEMENTOPAGO:</label>
                            <input type="text" class="form-control" name="complementopago" id="complementopago" maxlength="600" placeholder="COMPLEMENTOPAGO">
                          </div>
						  <div class="form-group col-lg-2 col-md-6 col-sm-3 col-xs-12">
                            <label>DEDUCIBLE:</label>
                            <input type="text" class="form-control" name="deducible" id="deducible" maxlength="38" placeholder="DEDUCIBLE">
                          </div>
						  <div class="form-group col-lg-2 col-md-6 col-sm-3 col-xs-12">
                            <label>ESTATUS SINIESTRO:</label>
                            <input type="text" class="form-control" name="estatus_siniestro" id="estatus_siniestro" maxlength="38" placeholder="ESTATUS SINIESTRO">
                          </div>
				  
						  <div class="form-group col-lg-3 col-md-2 col-sm-2 col-xs-12">
                            <label>NOMBRE DEL MAESTRO COLOCADOR(TECRISI):</label>
                            <input type="text" class="form-control" name="maestro_colocador" id="maestro_colocador" maxlength="250" placeholder="NOMBRE DEL MAESTRO COLOCADOR (TECRISI)">
                          </div>
						  
						  	<div class="form-group col-lg-2 col-md-6 col-sm-3 col-xs-12">
                            <label>OBSERVACIONES:</label>
							 <textarea type="text"  id="observaciones" name="observaciones" maxlength="1500"   placeholder="OBSERVACIONES.. " ></textarea>
							<!-- <input type="text" class="form-control" name="observaciones" id="observaciones" maxlength="38" placeholder="OBSERVACIONES.. "> -->
                          </div>
						  
                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>

                            <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                          </div>
                        </form>
                    </div>
                    <!--Fin centro -->
                  </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->
      </section><!-- /.content -->

    </div><!-- /.content-wrapper -->
  <!--Fin-Contenido-->
<?php
}
else
{
  require 'noacceso.php';
}

require 'footer.php';
?>
<script type="text/javascript" src="scripts/tragico.js"></script>
<?php 
}
ob_end_flush();
?>


