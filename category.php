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
 
<link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">
 
<link href="assets/css/style.css" rel="stylesheet">
 
<link href="assets/css/owl.carousel.css" rel="stylesheet">
<link href="assets/css/owl.theme.css" rel="stylesheet">
 
 
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
 
<script>
        paceOptions = {
            elements: true
        };
    </script>
<script src="assets/js/pace.min.js"></script>
</head>
<body>
<div id="wrapper">
<div class="header">
<nav class="navbar   navbar-site navbar-default" role="navigation">
<div class="container">
<div class="navbar-header">
<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
<a href="index.html" class="navbar-brand logo logo-title colortitulo">
 
<span class="logo-icon"><img src="images/to2autorep.png" />
<!--<i class="icon icon-search-1 ln-shadow-logo shape-0"></i>-->
</span>
TODO<span>REPUESTOS </span> </a></div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav navbar-right">

<li class="dropdown"><a class="enlace" href="#" class="dropdown-toggle" data-toggle="dropdown">
<?php
session_start();

// Controlo si el usuario ya está logueado en el sistema.
if(isset($_SESSION['email'])){
	echo "<span>".$_SESSION['email']." </span>";
}
?>
<i class="icon-user fa"></i> <i class=" icon-down-open-big fa"></i></a>
<ul class="dropdown-menu user-menu">
<li class="active"><a href="#"><i class="icon-home"></i> Mi Perfil
</a></li>
<li><a href="myads.php"><i class="icon-th-thumb"></i> Mis Anuncios </a></li>
<li><a href="#"><i class="icon-heart"></i> Anuncios Premium </a></li>
<li><a href="#"><i class="icon-folder-close"></i> Archivos </a></li>
<li><a href="#"><i class="icon-hourglass"></i> Por Aprobar </a></li>
<li><a href="#"><i class=" icon-money "></i> Historial de Pagos </a></li>
</ul>
</li>
<li><a href="index.php" class="enlace">Salir</a></li>
<li class="postadd"><a class="btn btn-block   btn-border btn-post btn-danger" href="post-ads.php">publicar!</a></li>
</ul>
</div>
 
</div>
 
</nav>
</div>
 
 

 
 
 
 
<div class="search-row-wrapper">
<div class="container ">






<form action="#" method="POST">

<div class="form-group">
<div class="row">
<div class="col-sm-12">
<input type="text" name="country" id="autocomplete-ajax" class="form-control input-sm" placeholder="Que repuesto desea encontrar" value="">
</div>
</div>
</div>

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

</form>





</div>
</div>
 
 
 
 
 
<div class="main-container">
<div class="container">
<div class="row">
 
<div class="col-sm-3 page-sidebar mobile-filter-sidebar">
<aside>
<div class="inner-box">
 
<div class="locations-list  list-filter">
<h5 class="list-title"><strong><a href="#">Ubicaci&oacute;n</a></strong></h5>
<ul class="browse-list list-unstyled long-list">
<li><a href="sub-category-sub-location.html"> Ahuachapan </a></li>
<li><a href="sub-category-sub-location.html"> Sonsonate </a></li>
<li><a href="sub-category-sub-location.html"> Santa Ana </a></li>
<li><a href="sub-category-sub-location.html"> Cabañas </a></li>
<li><a href="sub-category-sub-location.html"> Chalatenango </a></li>
<li><a href="sub-category-sub-location.html"> Cuscatlan </a></li>
<li><a href="sub-category-sub-location.html"> La Libertad </a></li>
<li><a href="sub-category-sub-location.html"> La Paz </a></li>
<li><a href="sub-category-sub-location.html"> San Salvador </a></li>
<li><a href="sub-category-sub-location.html"> San Vicente </a></li>
<li><a href="sub-category-sub-location.html"> Moraz&aacute;n </a></li>
<li><a href="sub-category-sub-location.html"> San Miguel </a></li>
<li><a href="sub-category-sub-location.html"> Usulut&aacute;n </a></li>
<li><a href="sub-category-sub-location.html"> La Uni&oacute;n </a></li>
</ul>
</div>
 
<div class="locations-list  list-filter">
<h5 class="list-title"><strong><a href="#">Rango de precios</a></strong></h5>
<form role="form" class="form-inline ">
<div class="form-group col-sm-4 no-padding">
<input type="text" placeholder="$ 1 " id="minPrice" class="form-control">
</div>
<div class="form-group col-sm-1 no-padding text-center hidden-xs"> -</div>
<div class="form-group col-sm-4 no-padding">
<input type="text" placeholder="$ 9999 " id="maxPrice" class="form-control">
</div>
<div class="form-group col-sm-3 no-padding">
<button class="btn btn-default pull-right btn-block-xs" type="submit">IR
</button>
</div>
</form>
<div style="clear:both"></div>
</div>
 
<div class="locations-list  list-filter">
<h5 class="list-title"><strong><a href="#">Vendedor</a></strong></h5>
<ul class="browse-list list-unstyled long-list">
<li><a href="sub-category-sub-location.html">Negocio <span class="count">28,705</span></a></li>
<li><a href="sub-category-sub-location.html">Particular <span class="count">18,705</span></a></li>
</ul>
</div>
 
<div class="locations-list  list-filter">
<h5 class="list-title"><strong><a href="#">Condici&oacute;n</a></strong></h5>
<ul class="browse-list list-unstyled long-list">
<li><a href="sub-category-sub-location.html">Nuevo <span class="count">228,705</span></a>
</li>
<li><a href="sub-category-sub-location.html">Usado <span class="count">28,705</span></a>
</li>
<li><a href="sub-category-sub-location.html">Ninguno </a></li>
</ul>
</div>
 
<div style="clear:both"></div>
</div>
 
</aside>
</div>
 
<div class="col-sm-9 page-content col-thin-left">
<div class="category-list">
<div class="tab-box ">
 
<ul class="nav nav-tabs add-tabs" id="ajaxTabs" role="tablist">
<li class="active"><a href="ajax/1.html" data-url="ajax/1.html" role="tab" data-toggle="tab">All Ads <span class="badge">228,705</span></a>
</li>
<li><a href="ajax/2.html" data-url="ajax/2.html" role="tab" data-toggle="tab">Business
<span class="badge">22,805</span></a></li>
<li><a href="ajax/3.html" data-url="ajax/3.html" role="tab" data-toggle="tab">Personal
<span class="badge">18,705</span></a></li>
</ul>
<div class="tab-filter">
<select class="selectpicker" data-style="btn-select" data-width="auto">
<option>Short by</option>
<option>Price: Low to High</option>
<option>Price: High to Low</option>
</select>
</div>
</div>
 
<div class="listing-filter">
<div class="pull-left col-xs-6">
<div class="breadcrumb-list"><a href="#" class="current"> <span>All ads</span></a> in
New York <a href="#selectRegion" id="dropdownMenu1" data-toggle="modal"> <span class="caret"></span> </a></div>
</div>
<div class="pull-right col-xs-6 text-right listing-view-action"><span class="list-view active"><i class="  icon-th"></i></span> <span class="compact-view"><i class=" icon-th-list  "></i></span> <span class="grid-view "><i class=" icon-th-large "></i></span></div>
<div style="clear:both"></div>
</div>
 
 
<div class="mobile-filter-bar col-lg-12  ">
<ul class="list-unstyled list-inline no-margin no-padding">
<li class="filter-toggle">
<a class="">
<i class="  icon-th-list"></i>
Filters
</a>
</li>
<li>
<div class="dropdown">
<a data-toggle="dropdown" class="dropdown-toggle"><i class="caret "></i> Short
by </a>
<ul class="dropdown-menu">
<li><a href="" rel="nofollow">Relevance</a></li>
<li><a href="" rel="nofollow">Date</a></li>
<li><a href="" rel="nofollow">Company</a></li>
</ul>
</div>
</li>
</ul>
</div>
<div class="menu-overly-mask"></div>
 
<div class="adds-wrapper">
<div class="tab-content">
<div class="tab-pane active" id="allAds">Loading...</div>
</div>
</div>
 
<div class="tab-box  save-search-bar text-center"><a href=""> <i class=" icon-star-empty"></i>
Save Search </a></div>
</div>
<div class="pagination-bar text-center">
<ul class="pagination">
<li class="active"><a href="#">1</a></li>
<li><a href="#">2</a></li>
<li><a href="#">3</a></li>
<li><a href="#">4</a></li>
<li><a href="#">5</a></li>
<li><a href="#"> ...</a></li>
<li><a class="pagination-btn" href="#">Next &raquo;</a></li>
</ul>
</div>
 
<div class="post-promo text-center">
<h2> Do you get anything for sell ? </h2>
<h5>Sell your products online FOR FREE. It's easier than you think !</h5>
<a href="post-ads.html" class="btn btn-lg btn-border btn-post btn-danger">Post a Free Ad </a>
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
 
 
<div class="modal fade" id="selectRegion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
<h4 class="modal-title" id="exampleModalLabel"><i class=" icon-map"></i> Select your region </h4>
</div>
<div class="modal-body">
<div class="row">
<div class="col-sm-12">
<p>Popular cities in <strong>New York</strong>
</p>
<div style="clear:both"></div>
<div class="col-sm-6 no-padding">
<select class="form-control selecter  " id="region-state" name="region-state">
<option value="">All States/Provinces</option>
<option value="Alabama">Alabama</option>
<option value="Alaska">Alaska</option>
<option value="Arizona">Arizona</option>
<option value="Arkansas">Arkansas</option>
<option value="California">California</option>
<option value="Colorado">Colorado</option>
<option value="Connecticut">Connecticut</option>
<option value="Delaware">Delaware</option>
<option value="District of Columbia">District of Columbia</option>
<option value="Florida">Florida</option>
<option value="Georgia">Georgia</option>
<option value="Hawaii">Hawaii</option>
<option value="Idaho">Idaho</option>
<option value="Illinois">Illinois</option>
<option value="Indiana">Indiana</option>
<option value="Iowa">Iowa</option>
<option value="Kansas">Kansas</option>
<option value="Kentucky">Kentucky</option>
<option value="Louisiana">Louisiana</option>
<option value="Maine">Maine</option>
<option value="Maryland">Maryland</option>
<option value="Massachusetts">Massachusetts</option>
<option value="Michigan">Michigan</option>
<option value="Minnesota">Minnesota</option>
<option value="Mississippi">Mississippi</option>
<option value="Missouri">Missouri</option>
<option value="Montana">Montana</option>
<option value="Nebraska">Nebraska</option>
<option value="Nevada">Nevada</option>
<option value="New Hampshire">New Hampshire</option>
<option value="New Jersey">New Jersey</option>
<option value="New Mexico">New Mexico</option>
<option selected value="New York">New York</option>
<option value="North Carolina">North Carolina</option>
<option value="North Dakota">North Dakota</option>
<option value="Ohio">Ohio</option>
<option value="Oklahoma">Oklahoma</option>
<option value="Oregon">Oregon</option>
<option value="Pennsylvania">Pennsylvania</option>
<option value="Rhode Island">Rhode Island</option>
<option value="South Carolina">South Carolina</option>
<option value="South Dakota">South Dakota</option>
<option value="Tennessee">Tennessee</option>
<option value="Texas">Texas</option>
<option value="Utah">Utah</option>
<option value="Vermont">Vermont</option>
<option value="Virgin Islands">Virgin Islands</option>
<option value="Virginia">Virginia</option>
<option value="Washington">Washington</option>
<option value="West Virginia">West Virginia</option>
<option value="Wisconsin">Wisconsin</option>
<option value="Wyoming">Wyoming</option>
</select>
</div>
<div style="clear:both"></div>
<hr class="hr-thin">
</div>
<div class="col-md-4">
<ul class="list-link list-unstyled">
<li><a href="#" title="">All Cities</a></li>
<li><a href="#" title="Albany">Albany</a></li>
<li><a href="#" title="Altamont">Altamont</a></li>
<li><a href="#" title="Amagansett">Amagansett</a></li>
<li><a href="#" title="Amawalk">Amawalk</a></li>
<li><a href="#" title="Bellport">Bellport</a></li>
<li><a href="#" title="Centereach">Centereach</a></li>
<li><a href="#" title="Chappaqua">Chappaqua</a></li>
<li><a href="#" title="East Elmhurst">East Elmhurst</a></li>
<li><a href="#" title="East Greenbush">East Greenbush</a></li>
<li><a href="#" title="East Meadow">East Meadow</a></li>
</ul>
</div>
<div class="col-md-4">
<ul class="list-link list-unstyled">
<li><a href="#" title="Elmont">Elmont</a></li>
<li><a href="#" title="Elmsford">Elmsford</a></li>
<li><a href="#" title="Farmingville">Farmingville</a></li>
<li><a href="#" title="Floral Park">Floral Park</a></li>
<li><a href="#" title="Flushing">Flushing</a></li>
<li><a href="#" title="Fonda">Fonda</a></li>
<li><a href="#" title="Freeport">Freeport</a></li>
<li><a href="#" title="Fresh Meadows">Fresh Meadows</a></li>
<li><a href="#" title="Fultonville">Fultonville</a></li>
<li><a href="#" title="Gansevoort">Gansevoort</a></li>
<li><a href="#" title="Garden City">Garden City</a></li>
</ul>
</div>
<div class="col-md-4">
<ul class="list-link list-unstyled">
<li><a href="#" title="Oceanside">Oceanside</a></li>
<li><a href="#" title="Orangeburg">Orangeburg</a></li>
<li><a href="#" title="Orient">Orient</a></li>
<li><a href="#" title="Ozone Park">Ozone Park</a></li>
<li><a href="#" title="Palatine Bridge">Palatine Bridge</a></li>
<li><a href="#" title="Patterson">Patterson</a></li>
<li><a href="#" title="Pearl River">Pearl River</a></li>
<li><a href="#" title="Peekskill">Peekskill</a></li>
<li><a href="#" title="Pelham">Pelham</a></li>
<li><a href="#" title="Penn Yan">Penn Yan</a></li>
<li><a href="#" title="Peru">Peru</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
 
 
 
<script src="assets/js/jquery/jquery-latest.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
 
<script src="assets/js/owl.carousel.min.js"></script>
 
<script src="assets/js/jquery.matchHeight-min.js"></script>
 
<script src="assets/js/hideMaxListItem.js"></script>
 
<script src="assets/plugins/jquery.fs.scroller/jquery.fs.scroller.js"></script>
<script src="assets/plugins/jquery.fs.selecter/jquery.fs.selecter.js"></script>
 
<script src="assets/js/script.js"></script>
</body>
</html>
