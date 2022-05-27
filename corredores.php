<?php
	include 'global/config.php';
	include 'global/conexion.php';
	include 'header.php';
	

  	$sentencia = $pdo->prepare("SELECT * FROM `corredor` ");
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
            <h1 class="title-single">Nuestras Corredoras</h1>            
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
       

         <?php foreach($listaProductos as $producto) { ?>

         	<div class="col-md-4">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="<?php echo $producto['Foto']; ?>" alt="" class="img-a img-fluid"> 
              
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="#"><?php echo $producto['Nombre'];?>
                      <br /><?php echo "Edad ".$producto['Edad']; ?></a>
                  </h2>
                </div>
                <div class="card-body-a">
                  
                  <a href="<?php echo $producto['pagina'] ?>" class="link-a">Click aquí ver más
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Experiencia</h4>
                      <span><?php echo $producto['Experiencia']." años"; ?>                        
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Mail</h4>
                      <span><?php echo $producto['Mail']; ?></span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
         <?php }?>

      </div>
    </div>
  </section>
  <br><br><br><br><br><br>

<?php include 'footer.php';  ?>
</body>
