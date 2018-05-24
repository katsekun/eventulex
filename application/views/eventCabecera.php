<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
	<script
	src="https://code.jquery.com/jquery-3.3.1.js"
	integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
	crossorigin="anonymous"></script>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	<script
	src="https://code.jquery.com/jquery-3.3.1.js"
	integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
	crossorigin="anonymous"></script>
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/master.css"> 
	<script type = 'text/javascript' src = "<?php echo base_url(); ?>js/main.js"></script> 
</head>

<body>
<div class="container text-center">
	<h1>EVENTULEX</h1>      
    <h3>Tus entradas sin esperas</h3>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="/eventulex/">Eventulex</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="/eventulex/eventos/">El tenis <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/eventulex/index.php/galeria">Galería</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/eventulex/index.php/quienes">Quienes somos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/eventulex/index.php/contacto">Contacto</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/eventulex/index.php/usuario">Usuario</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/eventulex/index.php/new_user">Nuevo usuario</a>
				</li>
			</ul>
		</div>
	</nav>




<!--
<div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		<span class="icon-bar" style="background-color: white;"></span>
	    <span class="icon-bar" style="background-color: white;"></span>
	    <span class="icon-bar" style="background-color: white;"></span>            
	</button>   
</div>
    
<div class="navbar navbar-light"  id="myNavbar">  
    <ul class="nav navbar-nav">
    	<li class="active"><a href="<?php echo site_url();?>/    /eventos/">EVENTOS</a></li>
        <li><a href="<?php echo site_url();?>/   /quienesSomos/">QUIENES SOMOS</a></li>
        <li><a href="<?php echo site_url();?>/    /comoFunciona/">COMO FUNCIONAMOS</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?php echo site_url();?>/  /acceso">USUARIO</a></li>
      <li><a href="<?php echo site_url();?>/  /nuevo">NUEVO USUARIO</a></li>
    </ul>  
</div>