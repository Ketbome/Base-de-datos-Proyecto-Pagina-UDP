<?php 
	include 'global/config.php';
	include 'global/conexion.php';
	include 'header.php';

	$sentencia = $pdo->prepare("SELECT * FROM `propietario` ");
	$sentencia->execute();
	$listaProductos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<body>
	
 <!--/ Inicio Registro /-->
<section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Registra tu propiedad</h1> <br>
            <h3>Para ingresar propiedad primero Registrate <a href="ingresa_propiedad.php">aquí</a> como propietario, si ya tienes una cuenta puedes continuar...  </h3>            
          </div>
        </div>      
      </div>
    </div>
</section>
  <!--/ Fin Registro /-->

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form action="validar_propiedad.php" method="POST">
                    <fieldset>        

                        <div class="form-group">                            
                            <div class="col-md-8">
                                <select class="form-control" id="Inmueble" name="Inmueble">
	                                <option>Inmueble</option>
						        	<option>Casa</option>
						        	<option>Departamento</option>
					        	</select>
                            </div>
                        </div>                        

                        <div class="form-group">                           
                            <div class="col-md-8">
                                <select class="form-control" id="Servicio" name="Servicio">
	                                <option>Servicio</option>
						        	<option>Venta</option>
						        	<option>Arriendo</option>
					        	</select>
                            </div>
                        </div>

                        <div class="form-group">                            
                            <div class="col-md-8">
                                <input id="phone" name="Region" type="text" placeholder="Region" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">                            
                            <div class="col-md-8">
                                <input id="phone" name="Ciudad" type="text" placeholder="Ciudad" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">                            
                            <div class="col-md-8">
                                <input id="phone" name="Comuna" type="text" placeholder="Comuna" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">                            
                            <div class="col-md-8">
                                <input id="phone" name="MetrosCuadrados" type="text" placeholder="Metros Cuadrados" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">                            
                            <div class="col-md-8">
                                <input id="phone" name="N°habitaciones" type="text" placeholder="N° habitaciones" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">                            
                            <div class="col-md-8">
                                <input id="phone" name="N°banios" type="text" placeholder="N° banios" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">                            
                            <div class="col-md-8">
                                <input id="phone" name="Precio" type="text" placeholder="Precio" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">                            
                            <div class="col-md-8">
                                <input id="phone" name="Verifiqueprecio" type="text" placeholder="Verifique precio" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">                            
                            <div class="col-md-8">
                                <input id="phone" name="Url" type="text" placeholder="URL fotografia" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">
                                <div class="col-md-8">
                                    <label for="state_id" class="control-label"></label>                                                                
                                
                                <select class="form-control" id="Rut" name="Rut">
                                    <option>Elige tu rut</option>
                                    <?php foreach($listaProductos as $producto)                                 
                                    {
                                        echo "<option>".$producto['Rut']."</option>"; 
                                        
                                    }
                                    ?>                      
                                    
                                </select>
                                </div>
                              </div> 
                        

                    	
                        <br><br>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" value="Enviar" class="btn btn-b">Enviar</button>                                
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
</body>




<?php
	include 'footer.php';
?>