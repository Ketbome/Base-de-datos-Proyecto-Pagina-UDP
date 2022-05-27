<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Inmobliaria UDP</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
  
  ======================================================= -->
</head>

<div class="click-closed"></div>
  <!--/ Form Search Star /-->

  
<form action="busqueda.php" method="GET"> 

  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Buscar Propiedades</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a">
        <div class="row">
          <div class="col-md-12 mb-2">

            <div class="form-group">
              <label for="Type">Inmueble</label>
              <select class="form-control form-control-lg form-control-a" id="type" name ="Inmueble" >
                <option>Casa</option>
                <option>Departamento</option>
              </select>
            </div>
          </div>          

            <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="garages">Metros cuadrados maximos</label>
              <input class="form-control form-control-lg" type="text" placeholder="Metros Cuadrados max" name = "Metros_cuad_max" >              
            </div>
          </div> 

           <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="garages">Comuna</label>
              <input class="form-control form-control-lg" type="text" placeholder="Comuna" name = "Comuna" >              
            </div>
          </div>

          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="garages">Metros cuadrados minimos</label>
              <input class="form-control form-control-lg" type="text" placeholder="Metros Cuadrados min" name = "Metros_cuad_min" >              
            </div>
          </div>         


          
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="Type">Servicio</label>              
              <select class="form-control form-control-lg form-control-a" id="type" name ="Servicio" placeholder="Tipo" >
				<option>Tipo</option>			  
                <option>Arriendo</option>
                <option>Venta</option>
              </select>
            </div>
          </div>

           <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="garages">Habitaciones maximas</label>
              <input class="form-control form-control-lg" type="text" placeholder="Habitaciones maximas" name = "Hab_max" >              
            </div>
          </div>

          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="garages">Region</label>
              <input class="form-control form-control-lg" type="text" placeholder="Region" name = "Region" >              
            </div>
          </div>
         

          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="garages">Habitaciones minimas</label>
              <input class="form-control form-control-lg" type="text" placeholder="Habitaciones minimas" name = "Hab_min" >              
            </div>
          </div>

          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="garages">Precio Máximo</label>
              <input class="form-control form-control-lg" type="text" placeholder="Precio Máximo" name = "Precio_max" >              
            </div>
          </div>

           <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="garages">Baños Maximos</label>
              <input class="form-control form-control-lg" type="text" placeholder="Baños Maximos" name = "banio_max" >              
            </div>
          </div>

           <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="price">Precio Mínimo</label>
              <input class="form-control form-control-lg" type="text" placeholder="Precio Mínimo" name = "Precio_min">  
            </div>
          </div>

          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="garages">Baños Minimos</label>
              <input class="form-control form-control-lg" type="text" placeholder="Baños Mínimo" name = "banio_min" >              
            </div>
          </div>
		  <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="garages">Provincia/Ciudad</label>
              <input class="form-control form-control-lg" type="text" placeholder="Provincia" name = "Provincia" >              
            </div>
          </div>


         
          <div class="col-md-12">
            <button type="submit" class="btn btn-b">Buscar Propiedad</button>
          </div>
        </div>
      </form>
    </div>
  </div>     
     <input type="submit" value="Enviar">
</form>



  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.php">Agencia<span class="color-b">Inmobiliaria</span></a>
        <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
          data-target="#navbarTogglerDemo01" aria-expanded="false">
          <span class="fa fa-search" aria-hidden="true"></span>
        </button>
        <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="index.php">Hogar</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="viviendas.php">Propiedades</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="corredores.php">Corredores</a>
            </li>         
            <li class="nav-item">
              <a class="nav-link" href="registro_cliente.php">Registro clientes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="registro_propietario.php">Registro propietario</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ingresar_propiedad.php">Registra tu propiedad</a>
            </li>
          </ul>
        </div>

      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
    </div>
  </nav>

  