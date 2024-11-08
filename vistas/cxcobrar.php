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

if ($_SESSION['cxcobrar']==1)
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
                          <h1 class="box-title">Venta <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button> <a href="../reportes/rptventas.php" target="_blank"><button class="btn btn-info"><i class="fa fa-clipboard"></i> Reporte</button></a></h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                            <th>Opciones</th>
                            <th>Fecha</th>
                            <th>Cliente</th>
                            <th>Usuario</th>
                            <th>Documento</th>
                            <th>Número</th>
                            <th>Total Venta</th>
                            <th>Estado</th>
                          </thead>
                          <tbody>                            
                          </tbody>
                          <tfoot>
                            <th>Opciones</th>
                            <th>Fecha</th>
                            <th>Proveedor</th>
                            <th>Usuario</th>
                            <th>Documento</th>
                            <th>Número</th>
                            <th>Total Venta</th>
                            <th>Estado</th>
                          </tfoot>
                        </table>
                    </div>
                    <div class="panel-body" style="height: 100%;" id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST">
                          <div class="form-group col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <label>Cliente(*):</label>
                            <input type="hidden" name="idventa" id="idventa">
                            <select id="idcliente" name="idcliente" class="form-control selectpicker" data-live-search="true" required>
                             </select>
                          </div>
                          <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label>Fecha(*):</label>
                            <input type="date" class="form-control" name="fecha_hora" id="fecha_hora" required="">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Tipo Comprobante(*):</label>
                            <select name="tipo_comprobante" id="tipo_comprobante" class="form-control selectpicker" required="">
                               <option value="Factura">Factura</option>
                               <option value="Ticket">Ticket</option>
							    <option value="Boleta">Boleta</option>
                            </select>
                          </div>
                          <div class="form-group col-lg-2 col-md-2 col-sm-6 col-xs-12">
                            <label>Serie:</label>
                            <input type="text" size="90"  align="center" class="form-control" name="serie_comprobante" id="serie_comprobante" maxlength="50" placeholder="Serie">
                          </div>
                          <div class="form-group col-lg-2 col-md-2 col-sm-6 col-xs-12">
                            <label>Subtotal:</label>
                            <input type="number" class="form-control" name="num_comprobante" id="num_comprobante" maxlength="10" placeholder="Número   10.0" required="" pattern="^[0-9]+([,]?[0-9]+)*$" >
                          </div>
                          <div class="form-group col-lg-2 col-md-2 col-sm-6 col-xs-12">
                            <label>Impuesto:</label>
                            <input type="number" class="form-control" name="impuesto" id="impuesto" required="">
                          </div>
						  <div class="form-group col-lg-2 col-md-2 col-sm-6 col-xs-12">
                            <label>ISR:</label>
                            <input type="number" class="form-control" name="impuesto" id="impuesto" required="">
                          </div>
						   <div class="form-group col-lg-2 col-md-2 col-sm-6 col-xs-12">
                            <label>TOTAL:</label>
                            <input type="number" class="form-control" name="impuesto" id="impuesto" required="">
                          </div>
						    <div class="form-group col-lg-2 col-md-2 col-sm-6 col-xs-12">
                            
							
							<div style="z-index:0; position: absolute; top: 0;  left: 8px;   
							height: 45px; width: 353px;border:1px dashed red;">
								<label disabled="disabled" control-type="TIssLabel" id="7662"   
								name="IssLabel29" style=" font-weight: bold;background-color:#fe0;">Si deseas agregar una descripcion mas detallada del detalle favor de anexarlo!
								</label>
								<div>
		<label>Observaciones:</label>					
                            <textarea name="observacion" type="text" class="form-control"  id="observacion" required=""></textarea>
                          </div>
						   </div>
							</div>
                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>

                            <button id="btnCancelar" class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
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

  <!-- Fin modal -->
<?php
}
else
{
  require 'noacceso.php';
}

require 'footer.php';
?>
<script type="text/javascript" src="scripts/cxcobrar.js"></script>
<?php 
}
ob_end_flush();
?>


