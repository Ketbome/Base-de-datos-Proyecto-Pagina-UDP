<?php
	include 'global/config.php';
	include 'global/conexion.php';
	include 'header.php';

	$sentencia = $pdo->prepare("SELECT * FROM `vivienda` ");
	$sentencia->execute();
	$listaProductos = $sentencia->fetchAll(PDO::FETCH_ASSOC);

	$mayor = 0;
	foreach ($listaProductos as $productos) 
	{
		if($productos['Id']> $mayor){
			$mayor = $productos['Id'];
		}		
	}
	$mayor += 1;



	$Inmueble	=	$_POST['Inmueble'];
	$Servicio	=	$_POST['Servicio'];
	$Region		=	$_POST['Region'];
	$Ciudad		= 	$_POST['Ciudad'];
	$Comuna		=	$_POST['Comuna'];
	$Metros		=	$_POST['MetrosCuadrados'];
	$hab 		=	$_POST['N°habitaciones'];
	$banios		=	$_POST['N°banios'];
	$Precio		= 	$_POST['Precio'];
	$Precio_int =	$_POST['Verifiqueprecio'];
	$foto		=	$_POST['Url'];
	$Rut 		=	$_POST['Rut'];




	$sentencia = $pdo->prepare("INSERT INTO vivienda VALUES
	
	('{$mayor}','{$Rut}','{$Inmueble}','{$Servicio}','{$Region}','{$Ciudad}','{$Comuna}','{$Metros}','{$hab}','{$banios}','{$Precio}','{$Precio_int}','{$foto}');" 
	// No pueden haber 2 rut iguales en la base

    );



	$sentencia->execute();
 	$idVenta = $pdo->lastInsertId();

?>

<!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Registro exitoso!</h1>  <br><br><br> 
            <h3> <a href="index.php">Click aquí para ir a la página principal</a> </h3>         
          </div>
        </div>      
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->




<?php 

include 'footer.php';

?>