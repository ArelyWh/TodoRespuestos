<?php include 'controller/datacon.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/ico/favicon.png">
<title>Todo Repuestos</title>
 
<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
<link href="assets/css/style.css" rel="stylesheet">
 
<link href="assets/css/owl.carousel.css" rel="stylesheet">
<link href="assets/css/owl.theme.css" rel="stylesheet">
 
 
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
 <style type="text/css">
		#superior 
		{
			background-color: #0070C0;
		    border-color: #0070C0;
		    color: #fff;
		}

		.mywhite
		{
    		color: white !important;
		}
 </style>

 <script>
        paceOptions = {
            elements: true
        };
    </script>
<script src="assets/js/pace.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#btnmostrar").click(function(){
        $("#avanzado").toggle();
    });
});
</script>
</head>
<body>
<div id="wrapper">
<div class="header">
<nav class="navbar   navbar-site navbar-default" id="superior" role="navigation">
<div class="container">
<div class="navbar-header">
<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
<a href="index.php" class="navbar-brand logo logo-title mywhite">
 
<span class="logo-icon mywhite"><img src="images/to2autorep.png" />
<!--<i class="icon icon-search-1 ln-shadow-logo shape-0"></i>-->
</span>
TODO<span>REPUESTOS </span> </a></div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav navbar-right">
<li><a href="#" data-toggle="modal" data-target="#modaLogin" class="mywhite">Ingresar</a></li>
<li><a href="fastsignup.html" class="mywhite">Registrarse</a></li>
<li class="postadd"><a class="btn btn-block   btn-border btn-post btn-danger" href="post-ads.php">Publicar!</a></li>
</ul>
</div>
 
</div>
 
</nav>
</div>
 
<div class="intro" style="background-image: url(images/bg3.jpg);">
<div class="dtable hw100">
<div class="dtable-cell hw100">
<div class="container text-center">
<h1 class="intro-title animated fadeInDown"> Repuestos a un clic </h1>
<p class="sub animateme fittext3 animated fadeIn"> Encuentra lo que buscas para tu veh&iacute;culo r&aacute;pido y f&aacute;cil</p>


<div class="row search-row animated fadeInUp">
<div class="col-lg-8 col-sm-8 search-col relative locationicon">
<i class="icon-location-2 icon-append"></i>
<input type="text" name="country" id="autocomplete-ajax" class="form-control locinput input-rel searchtag-input has-icon" placeholder="Que repuesto desea encontrar" value="">
</div>

<div class="col-lg-4 col-sm-4 search-col">
<button class="btn btn-primary btn-search btn-block"><i class="icon-search"></i><strong>Buscar</strong></button>
</div>

<a class="text-left" id="btnmostrar">Busqueda Avanzada</a>

<div id="avanzado" hidden="hidden">

<div class="form-group">
<div class="row">
<div class="col-sm-4">
<select class="selectpicker" data-style="btn-select" data-width="auto">
<option>Marca</option>
<option>Alfa Romeo</option>
<option>BMW</option>
<option>Citroen</option>
</select>
</div>
<div class="col-sm-4">
<select class="selectpicker" data-style="btn-select" data-width="auto">
<option>Modelo</option>
<option>Alfa 1</option>
<option>BMW 325i</option>
</select>
</div>
<div class="col-sm-4">
<select class="selectpicker" data-style="btn-select" data-width="auto">
<option>Estado</option>
<option>Nuevo</option>
<option>Usado</option>
</select>
</div>
</div>
</div>

<div class="form-group">
<div class="row">
<div class="col-sm-3">
<input class="form-control keyword " style="height:32px" type="text" placeholder="A&#241;o">
</div>

<div class="col-sm-3">
<input class="form-control keyword " style="height:32px" type="text" placeholder="Tipo">
</div>
<div class="col-sm-3">
<input class="form-control keyword " style="height:32px" type="text" placeholder="Version">
</div>
<div class="col-sm-3">
<button class="btn btn-block btn-primary" style="height:32px"><i class="fa fa-search"></i></button>
</div>
</div>
</div>
</div>
</div>



</div>
</div>
</div>
</div>
 
<div class="main-container">
<div class="container">
<div class="col-lg-12 content-box ">


<div class="row row-featured row-featured-category">
	<div class="col-lg-12  box-title no-border">
	<div class="inner"><h2><span>B&uacute;squeda por Categoría<a href="#" class="sell-your-item">Ver más<i class="  icon-th-list"></i> </a></h2>
	</div>
	</div>
	
	<?php
		$sql = "SELECT idCategoria, Nombre FROM categorias";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			//echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
			echo "<div id='".$row["idCategoria"]."' class='col-lg-2 col-md-3 col-sm-3 col-xs-4 f-category'>
				  <a href='#'><img src='images/category/car-2.jpg' class='img-responsive' alt='img'>
				  <h6> ".$row["Nombre"]." </h6></a>
				  </div>";
		}
		}else {
		echo "0 results";
		}

		$conn->close();
	?>

	</div>
</div>
<div style="clear: both"></div>




<div class="row">

<!--<div class="col-sm-9 page-content col-thin-right">

<div class="inner-box has-aff relative">
<a class="dummy-aff-img" href="#"><img src="images/aff2.jpg" class="img-responsive" alt=" aff"> </a>
</div>
</div>-->

<div class="col-sm-3 page-sidebar col-thin-right">
<div class="inner-box no-padding">
<div class="inner-box-content"><a href="#"><img class="img-responsive" src="images/site/app.jpg" alt="tv"></a>
</div>
</div>
</div>

<div class="col-sm-3 page-sidebar col-thin-right">
<div class="inner-box no-padding">
<div class="inner-box-content"><a href="#"><img class="img-responsive" src="images/site/app.jpg" alt="tv"></a>
</div>
</div>
</div>

<div class="col-sm-3 page-sidebar col-thin-left">
<div class="inner-box no-padding">
<div class="inner-box-content"><a href="#"><img class="img-responsive" src="images/site/app.jpg" alt="tv"></a>
</div>
</div>
</div>

<div class="col-sm-3 page-sidebar col-thin-left">
<div class="inner-box no-padding">
<div class="inner-box-content"><a href="#"><img class="img-responsive" src="images/site/app.jpg" alt="tv"></a>
</div>
</div>
</div>

</div>

</div>
</div>
<div class="footer" id="footer">
<div class="container">
<ul class=" pull-right navbar-link footer-nav">
<li> &copy; 2015 BootClassified</li>
</ul>
</div>
</div>
 
</div>

<div class="modal fade" id="modaLogin" role="dialog">
  <div class="modal-dialog">
	<!-- Modal content-->
	<div class="modal-content">


	  <form class="form-signin" action="controller/login.php" method="post">
		<div class="modal-body">
		  <h2 class="form-signin-heading">Ingresa con tu cuenta</h2>
		  <label for="inputEmail" class="sr-only">correo electr&oacute;nico</label>
		  <input type="email" name="correo" class="form-control" placeholder="correo electr&oacute;nico" required autofocus/>
		  <label for="inputPassword" class="sr-only">clave</label>
		  <input type="password" name="contrasenia" class="form-control" placeholder="clave" required/>
		  <div class="checkbox">
			<label>
			  <input type="checkbox" value="remember-me"/>Recordar
			</label>
		  </div>
		  <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
		  <a href="fastsignup.html" class="btn btn-lg btn-success btn-block" >Registrarse</a>
		</div>
	  </form>



	</div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.matchHeight-min.js"></script>
<script src="assets/js/hideMaxListItem.js"></script>
<script src="assets/plugins/jquery.fs.scroller/jquery.fs.scroller.js"></script>
<script src="assets/plugins/jquery.fs.selecter/jquery.fs.selecter.js"></script>
<script src="assets/js/script.js"></script>
<script>


</script>
<script type="text/javascript" src="assets/plugins/autocomplete/jquery.mockjax.js"></script>
<script type="text/javascript" src="assets/plugins/autocomplete/jquery.autocomplete.js"></script>
<script type="text/javascript" src="assets/plugins/autocomplete/usastates.js"></script>
<script type="text/javascript" src="assets/plugins/autocomplete/autocomplete-demo.js"></script>
</body>
</html>