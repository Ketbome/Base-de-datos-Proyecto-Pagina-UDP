<?php
	include 'global/config.php';
	include 'global/conexion.php';
	include 'header.php';	

	$sentencia = $pdo->prepare("SELECT * FROM `vivienda` ");
	$sentencia->execute();
	$listaProductos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">

<body>

 
  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Nuestras Propiedades</h1>            
          </div>
        </div>      
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->


  <!--/ Property Grid Star /-->
  <section class="property-grid grid">
    <div class="container">
      <div class="row">
        

         <?php foreach($listaProductos as $producto) { 
           $xd = "SELECT corredor.* FROM `propietario`,`corredor` WHERE propietario.Rut =".$producto['Rut_propietario']." AND propietario.Rut_corredor=corredor.Rut";
           $corredo = $pdo->prepare($xd); 
           $corredo->execute();
           $n = $corredo->fetch(PDO::FETCH_ASSOC);
          ?>

         	<div class="col-md-4">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="<?php echo $producto['Foto']; ?>" alt="" class="img-a img-fluid"> 
              
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
					<?php echo "#".$producto['Id']; ?>
                    <a href="#"><?php echo $producto['Provincia'];?>
                      <br /><?php echo $producto['Comuna']; ?></a>
                  </h2>
                  <a href="<?php echo $n['pagina']; ?>" class="link-a">Contactate con el corredor
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                  
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a"><?php echo $producto['Servicio']; ?> | <?php echo $producto['Precio']; ?></span>
                  </div>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Área</h4>
                      <span><?php echo $producto['Metros_cuad']; ?>
                        <sup>2</sup>
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Habitaciones</h4>
                      <span><?php echo $producto['n_hab']; ?></span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Baños</h4>
                      <span><?php echo $producto['n_banios']; ?></span>
                    </li>
                    
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

         <?php } ?>
       
  </section>
  <!--/ Property Grid End /-->

  

<?php include 'footer.php'; ?>
</body>




