<?php
	include 'global/config.php';
	include 'global/conexion.php';
	include 'header.php';

	$rut	= $_POST['rut'];
	$edad	= $_POST['edad']; 
	$email	= $_POST['email'];
	$nombre	= $_POST['nombre'];
	$sueldo	= $_POST['sueldo'];
	$telefono	= $_POST['telefono'];
	$domicilio	= $_POST ['domicilio'];
	$corredora	= $_POST['corredora'];

	if($corredora == "Javiera Correa")
	{
		$corredora = 15365213;
	}
	if($corredora == "Maribel Sandoval")
	{
		$corredora = 16524896;
	}


	$sentencia = $pdo->prepare("INSERT INTO cliente VALUES
	
	({$rut},'{$nombre}',{$edad},'{$email}','{$domicilio}',{$telefono},{$sueldo},{$corredora});" // No pueden haber 2 rut iguales en la base

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
            <h1 class="title-single">¡Cuenta Creada Exitosamente!</h1>   
            <h2> <a href="index.php">Click aquí para ir a la página principal</a> </h2>         
          </div>
        </div>      
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

<?php
	include 'footer.php';
?>