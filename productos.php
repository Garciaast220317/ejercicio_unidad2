<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Escritorio Público ASTRID</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Avilon
    Theme URL: https://bootstrapmade.com/avilon-bootstrap-landing-page-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">Escritorio Publico</a></h1>

      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="index.html">Inicio</a></li>
          <li><a href="about.php">Informacion</a></li>
          <li><a href="productos.php">Productos</a></li>
          <li><a href="servicio.php">Servicios</a></li>
          <li><a href="galeria.php">Galeria</a></li>       
       </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header>
  <br><br>
<div class="container">
	<div class="alert alert-primary" role="alert">
	  Alta de Productos
	</div>
</div>
<br>
<br>

<div class="container">
	<form method="POST" accept-charset="utf-8">

	  	<div class="form-group">
		    <label for="apellidos">Nombre Producto:</label>
		    <input type="text" class="form-control" id="apellidos" aria-describedby="" name="apellidos" placeholder="producto" required="true">
		    <small id="" class="form-text text-muted">Escriba el nombre del producto (lapiz, pluma, hojas) </small>
	  	</div>

	  	<div class="form-group">
		    <label for="nombre">Cantidad Producto</label>
		    <input type="text" class="form-control" id="nombres" aria-describedby="" name="nombres" placeholder="Cantidad" required="true">
		    <small id="" class="form-text text-muted">Escriba la cantidad del produto (1, 10, 3)</small>
	  	</div>

	  	<div class="form-group">
		    <label for="nombre">Costo Producto</label>
		    <input type="text" class="form-control" id="nombres" aria-describedby="" name="nombres" placeholder="Costo" required="true">
		    <small id="" class="form-text text-muted">Escriba el costo del produto ($10, $35)</small>
	  	</div>
	  <button type="submit" class="btn btn-warning">Guardar</button>
	</form>
</div>