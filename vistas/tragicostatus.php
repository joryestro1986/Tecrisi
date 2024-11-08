    <style>
        .hrLinea{
            vertical-align: middle;
            width: 10%;
            display: inline-block;
            border: 1px solid #1BB286; 
        }
    </style>

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
                          <h1 class="box-title">    Categoría       <!-- <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button> -->
						  <a href="../reportes/rptsiniestros.php" target="_blank"><button class="btn btn-info"><i class="fa fa-clipboard"></i> Reporte</button></a>
						   
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
						
                            <th>ASEGURADORA</th>
							<th>ASEGURADO</th>
                            <th>STATUS</th>
                          </thead>
                          <tbody>                            
                          </tbody>
                          <tfoot>
                            <th>OPCIONES</th>
                            <th>SINIESTRO</th>
		
                            <th>ASEGURADORA</th>
							<th>ASEGURADO</th>
							
                            <th>STATUS</th>
                          </tfoot>
                        </table>
                    </div>
                    <div class="panel-body" style="height: 650px;" id="formularioregistros"  border="black 5px solid">
                        <form name="formulario" id="formulario" method="POST">
                           
											  
						  <div class="form-group col-lg-11 col-md-7 col-sm-6 col-xs-12">
                            <label class="bg-success">SINIESTRO(*):</label>
							 <!--<input  type="text" class="form-control" name="idstatus" id="idstatus" maxlength="50" placeholder="idstatus" >
							 -->
							<input  type="text" class="form-control" name="nombreseg" id="nombreseg"  >
							<input type="hidden" name="idmovint" id="idmovint">
							<input  type="text" class="form-control" name="siniestro" id="siniestro" maxlength="50" placeholder="SINIESTRO" required>
						</div>
						         
					
                          <!--  ='$idstatus
						  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Categoría(*):</label>
                            <select id="idcategoria" name="idcategoria" class="form-control selectpicker" data-live-search="true" required></select>
                          </div> -->
						  

				 
	

						  <div  class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12">
						  <hr class="hrLinea"> - <hr class="hrLinea">
                            <label class="p-2 text-dark bg-opacity-10 text-purple">ESTATUS  1:</label>
                              <input type="text" class="form-control"   maxlength="50" value="MEDICION" readonly >
 
                            <label class="p-2 text-dark bg-opacity-10 text-purple">FECHA ESTATUS  1:</label>
                          	<input type="date" class="form-control" name="fechasta1" id="fechasta1" required pattern="\d{4}-\d{2}-\d{2}" >
 
                            <label class="p-2 text-dark bg-opacity-10 text-purple">OBSERVACIONES:</label>
							 <textarea type="text"  id="observastatus1" name="observastatus1" maxlength="1500"   placeholder="OBSERVACION ESTATUS  1.. " ></textarea>
							
								
						 </div>  
						  
						 
	 	  
						  <div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12">
						  
						  <hr class="hrLinea"> - <hr class="hrLinea">
						  
                            <label class="bg-info">ESTATUS  2:</label>
                              <input type="text" class="form-control"   maxlength="50" value="PROCESO" readonly >
                         
                            <label class="bg-info">FECHA ESTATUS  2:</label>
                            <input type="date" class="form-control" name="fechasta2" id="fechasta2"  pattern="\d{4}-\d{2}-\d{2}" >
                          
                            <label class="bg-info">OBSERVACIONES ESTATUS  2:</label>
							 <textarea type="text"  id="observastatus2" name="observastatus2" maxlength="1500"   placeholder="OBSERVACIONES ESTATUS 2.. " ></textarea>
						    </div>
 
						 
							
						  <div class="form-group col-lg-4 col-md-5 col-sm-5 col-xs-12">
						  <hr class="hrLinea">+++<hr class="hrLinea">
                            <label class="bg-info p-2 text-dark bg-opacity-15 text-red">ESTATUS  3:</label>
                              <input type="text" class="form-control" maxlength="50" value="COLOCACION" readonly >
                        
                            <label class="bg-info p-2 text-dark bg-opacity-15 text-red" >FECHA ESTATUS 3:</label>
                            <input type="date" class="form-control" name="fechasta3" id="fechasta3" pattern="\d{4}-\d{2}-\d{2}">
                        
                            <label class="bg-info p-2 text-dark bg-opacity-15 text-red">OBSERVACIONES ESTATUS  3:</label>
							 <textarea type="text"  id="observastatus3" name="observastatus3" maxlength="1500"   placeholder="OBSERVACIONES ESTATUS 3.. " ></textarea>
						 </div>
						  
 
						  
						  <div class="form-group col-lg-4 col-md-5 col-sm-5 col-xs-12">
						  <hr class="hrLinea"> - <hr class="hrLinea">
                            <label class="bg-danger">ESTATUS  4:</label>
                              <input type="text" class="form-control"   maxlength="50" value="FINIQUITO" readonly >
                         
                            <label class="bg-danger">FECHA ESTATUS  4:</label>
                            <input type="date" class="form-control" name="fechasta4" id="fechasta4" pattern="\d{4}-\d{2}-\d{2}" >
                        
                            <label class="bg-danger">OBSERVACIONES ESTATUS  4:</label>
							 <textarea type="text"  id="observastatus4" name="observastatus4" maxlength="1500"   placeholder="OBSERVACIONES ESTATUS 4.. " ></textarea>
						  </div>
						
						<div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
						  <hr class="hrLinea">  **  <hr class="hrLinea">
                            <label class="p-2 bg-opacity-15 text-blue">ESTATUS  5:</label>
                              <input type="text" class="form-control" maxlength="50" value="FACTURACION" readonly >
                          
                            <label class="p-2 bg-opacity-15 text-blue">FECHA ESTATUS  5:</label>
                            <input type="date" class="form-control" name="fechasta5" id="fechasta5" pattern="\d{4}-\d{2}-\d{2}" >
                         
                            <label class="p-2 bg-opacity-15 text-blue">OBSERVACIONES ESTATUS  5:</label>
							 <textarea type="text"  id="observastatus5" name="observastatus5" maxlength="1500"   placeholder="OBSERVACIONES ESTATUS 5.. " ></textarea>
						    </div>
							
					
					
							<div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<hr class="hrLinea">-<hr class="hrLinea">
                            <label class="bg-warning">ESTATUS  6:</label>
                              <input type="text" class="form-control"   maxlength="50" value="COBRO" readonly >
                         
                            <label class="bg-warning">FECHA ESTATUS  6:</label>
                            <input type="date" class="form-control" name="fechasta6" id="fechasta6"  pattern="\d{4}-\d{2}-\d{2}">
                          
                            <label class="bg-warning">OBSERVACIONES ESTATUS  6: </label>
							 <textarea type="text" id="observastatus6" name="observastatus6" maxlength="1500"   placeholder="OBSERVACIONES ESTATUS 6.. " ></textarea>
						    </div>
						  
						  
						  <!-- 
						  <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 table-responsive">
                            <table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
                              <thead style="background-color:#A9D0F5">
                                    <th>Opciones</th>
                                    <th>status</th>
                                    <th>fecha</th>
                                    <th>observastatus</th>
                                </thead>
                               <tbody>
                                  
                                </tbody>
                            </table>
                          </div> -->
						  
						  
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
<script type="text/javascript" src="scripts/tragicostatus.js"></script>
<?php 
}
ob_end_flush();
?>


