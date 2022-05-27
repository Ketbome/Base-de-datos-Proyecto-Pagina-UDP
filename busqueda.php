<?php
	include 'global/config.php';
	include 'global/conexion.php';
	include 'header.php';	
	$xd="SELECT * FROM `vivienda` WHERE ";
	$xd = $xd."Inmueble = '".$_GET['Inmueble']."'";
	if($_GET['Region']!=""){ $xd = $xd." AND Region = '".$_GET['Region']."'";}
	if($_GET['Precio_max']!="" && $_GET['Precio_min']!=""){ $xd = $xd." AND Precio_int BETWEEN ".$_GET['Precio_min']." AND ".$_GET['Precio_max'];}
	if($_GET['Precio_max']!="" && $_GET['Precio_min']==""){ $xd = $xd." AND Precio_int BETWEEN 0 AND ".$_GET['Precio_max'];}
	if($_GET['Precio_max']=="" && $_GET['Precio_min']!=""){ $xd = $xd." AND Precio_int BETWEEN ".$_GET['Precio_min']." AND 10000000000000";}
	if($_GET['Servicio']!="Tipo"){ $xd = $xd." AND Servicio = '".$_GET['Servicio']."'"; }
	if($_GET['Comuna']!=""){ $xd = $xd." AND Comuna = '".$_GET['Comuna']."'";}
	if($_GET['Metros_cuad_max']!="" && $_GET['Metros_cuad_min']!=""){ $xd = $xd." AND Metros_cuad BETWEEN ".$_GET['Metros_cuad_min']." AND ".$_GET['Metros_cuad_max'];}
	if($_GET['Metros_cuad_max']=="" && $_GET['Metros_cuad_min']!=""){ $xd = $xd." AND Metros_cuad BETWEEN ".$_GET['Metros_cuad_min']." AND 10000000000000";}
	if($_GET['Metros_cuad_max']!="" && $_GET['Metros_cuad_min']==""){ $xd = $xd." AND Metros_cuad BETWEEN 0 AND ".$_GET['Metros_cuad_max'];}
	if($_GET['banio_max']!="" && $_GET['banio_min']!=""){ $xd = $xd." AND n_banios BETWEEN ".$_GET['banio_min']." AND ".$_GET['banio_max'];}
	if($_GET['banio_max']=="" && $_GET['banio_min']!=""){ $xd = $xd." AND n_banios BETWEEN ".$_GET['banio_min']." AND 10000000000000";}
	if($_GET['banio_max']!="" && $_GET['banio_min']==""){ $xd = $xd." AND n_banios BETWEEN 0 AND ".$_GET['banio_max'];}
	if($_GET['Hab_max']!="" && $_GET['Hab_min']!=""){ $xd = $xd." AND n_hab BETWEEN ".$_GET['Hab_min']." AND ".$_GET['Hab_max'];}
	if($_GET['Hab_max']=="" && $_GET['Hab_min']!=""){ $xd = $xd." AND n_hab BETWEEN ".$_GET['Hab_min']." AND 10000000000000";}
	if($_GET['Hab_max']!="" && $_GET['Hab_min']==""){ $xd = $xd." AND n_hab BETWEEN 0 AND ".$_GET['Hab_max'];}
	if($_GET['Provincia']!=""){ $xd = $xd." AND Provincia = '".$_GET['Provincia']."'";}
    //$sentencia = $pdo->prepare("SELECT * FROM `vivienda` ");
	$sentencia = $pdo->prepare($xd);



	//                                                         Base datos = name del formulario

	$sentencia->execute();  	
	$listaProductos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>




<!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Propiedad</h1>            
          </div>
        </div>      
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <?php
    if ($listaProductos == null) { 
      ?>

      <section class="intro-single">        
          <div class="row d-flex justify-content-center">
            <div class="col-md-12 col-lg-8">
              <div class="title-single-box">
                <h3 class="">No hay viviendas con los parámetros de búsqueda ingresados, intente cambiarlos.</h3>    
                <br>                   
                <div class="row d-flex justify-content-center">
                  <img  src="https://i.pinimg.com/originals/ce/ba/e1/cebae1fd9ef80616b4708920059620cd.webp">                          
                </div>
              </div>
            </div>      
          </div>
    </section>
  
  <?php
    }?>
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
</div>
         </div>
         </section>


  <br>
  <br>
  <br>

        <?php include 'footer.php';?>
  

  </body>