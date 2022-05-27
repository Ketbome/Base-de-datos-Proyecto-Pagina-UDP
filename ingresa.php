<?php 
	include 'global/config.php';
	include 'global/conexion.php';
	include 'header.php';
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
            <h1 class="title-single">Registro</h1>            
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
                <form action="validar.php" method="POST">
                    <fieldset>        

                        <div class="form-group">                            
                            <div class="col-md-8">
                                <input id="fname" name="nombre" type="text" placeholder="Nombre" class="form-control">
                            </div>
                        </div>                        

                        <div class="form-group">                           
                            <div class="col-md-8">
                                <input id="email" name="email" type="text" placeholder="Email" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">                            
                            <div class="col-md-8">
                                <input id="phone" name="telefono" type="text" placeholder="Telefono" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">                            
                            <div class="col-md-8">
                                <input id="phone" name="edad" type="text" placeholder="Edad" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">                            
                            <div class="col-md-8">
                                <input id="phone" name="domicilio" type="text" placeholder="Domicilio" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">                            
                            <div class="col-md-8">
                                <input id="phone" name="sueldo" type="text" placeholder="Sueldo" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">                            
                            <div class="col-md-8">
                                <input id="phone" name="rut" type="text" placeholder="Rut" class="form-control">
                            </div>
                        </div>

                    	<div class="form-group">
                    		<div class="col-md-8">
                    			<label for="state_id" class="control-label">Corredoras</label>
					        
					        <select class="form-control" id="corredora" name="corredora">
					        	<option>Javiera Correa</option>
					        	<option>Maribel Sandoval</option>
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