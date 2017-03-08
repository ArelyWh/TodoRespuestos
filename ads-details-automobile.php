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
 
<link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">
 
<link href="assets/css/style.css" rel="stylesheet">
 
<link href="assets/css/owl.carousel.css" rel="stylesheet">
<link href="assets/css/owl.theme.css" rel="stylesheet">
 
<link href="assets/plugins/bxslider/jquery.bxslider.css" rel="stylesheet"/>
 
 
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
<a href="index.php" class="navbar-brand logo logo-title">
 
<span class="logo-icon"><i class="icon icon-search-1 ln-shadow-logo shape-0"></i> </span>
TODO<span>REPUESTOS </span> </a></div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav navbar-right">
<li><a href="#" data-toggle="modal" data-target="#modaLogin" class="mywhite">Ingresar</a></li>
<li><a href="fastsignup.html">Registrarse</a></li>
<li class="postadd"><a class="btn btn-block   btn-border btn-post btn-danger" href="post-ads.php">Post Free Add</a></li>
</ul>
</div>
 
</div>
 
</nav>
</div>

<?php

//esta parte debe de ir en el login
$nombre="ruta_adjuntos";
$sql_path = "SELECT valor FROM parametros WHERE Nombre='$nombre'";
$result_path = $conn->query($sql_path);

while ($row = $result_path->fetch_assoc()) {  
    $_SESSION['path'] = $row['valor'];
 }
//hasta aqui

$ruta=$_SESSION['path'];

        $id_producto=19;//REQUEST_ID_PRODUCTO
        $sql = "SELECT p.IdProducto, p.Nombre, p.Cantidad, p.Precio, p.Descripcion, p.IdUsuario, 
        p.IdSubCategoria, sub.Nombre as SubCategoria,c.IdCategoria, c.Nombre as Categoria, 
        p.Marca, p.Modelo, p.Anio, p.Tipo, p.IdVersion,v.Nombre as Version, 
        p.IdEstado, e.Nombre as Estado, p.Oferta, p.Puntos, p.ImgUrl1, p.ImgUrl2, p.ImgUrl3, 
        p.FechaCreacion, p.UsuarioCreacion, CONCAT(upper(u.Nombres),' ',upper(u.Apellidos)) as usuario, 
        u.Telefono, u.Email,u.Genero, p.FechaModificacion, p.UsuarioModificacion, 
        CASE WHEN Oferta = 1 THEN 'OFERTA' ELSE 'NINGUNA' END AS Offert
        FROM productos p 
        INNER JOIN subcategorias sub ON sub.IdSubcategoria = p.IdSubCategoria
        INNER JOIN categorias c ON c.idCategoria = sub.IdCategoria
        INNER JOIN versiones v ON v.IdVersion=p.IdVersion
        INNER JOIN estados e ON e.IdEstado= p.IdEstado
        INNER JOIN usuarios u ON u.IdUsuario = P.UsuarioCreacion  where IdProducto='$id_producto'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
             $Nombre = $row["Nombre"];
             $Cantidad = $row["Cantidad"];
             $Precio = $row["Precio"];
             $Descripcion = $row["Descripcion"];
             $IdUsuario = $row["IdUsuario"];
             $IdSubCategoria = $row["IdSubCategoria"];
             $SubCategoria = $row["SubCategoria"];
             $Categoria = $row["Categoria"];
             $Marca = $row["Marca"];
             $Modelo = $row["Modelo"];
             $Anio = $row["Anio"];
             $Tipo = $row["Tipo"];
             $IdVersion = $row["IdVersion"];
             $Version = $row["Version"];
             $IdEstado = $row["IdEstado"];
             $Estado = $row["Estado"];
             $Oferta = $row["Oferta"];
             $Offert = $row["Offert"];
             $ImgUrl1 = $ruta.$row["ImgUrl1"];
             $ImgUrl2 = $ruta.$row["ImgUrl2"];
             $ImgUrl3 = $ruta.$row["ImgUrl3"];
             $UsuarioCreacion = $row["UsuarioCreacion"];
             $Puntos = $row["Puntos"];
             $FechaCreacion = $row["FechaCreacion"];
             $FechaModificacion = $row["FechaModificacion"];

             //INFORMACION DE CONTACTO
             $usuario = $row["usuario"];
             $telefono = $row["Telefono"];
             $email= $row["Email"];
             $genero= $row["Genero"];
            
        }
        }else {
        echo "0 results";
        }

        $conn->close();
    ?>
 
<div class="main-container">
<div class="container">
<ol class="breadcrumb pull-left">
<li><a href="#"><i class="icon-home fa"></i></a></li>
<li><a href="category.html"><?php echo $Categoria;?></a></li>
<li><a href="sub-category-sub-location.html"><?php echo $SubCategoria;?></a></li>
<li class="active">Resultados de la búsqueda</li>
</ol>
<div class="pull-right backtolist"><a href="#"> <i class="fa fa-angle-double-left"></i>Regresar</a></div>
</div>
<div class="container">
<div class="row">
<div class="col-sm-9 page-content col-thin-right">
<div class="inner inner-box ads-details-wrapper">
<h1 class="auto-heading"><span class="auto-title left"><?php echo $Nombre;?></span> <span class="auto-price pull-right"> $<?php echo $Precio;?></span></h1>
<div style="clear:both;"></div>
<span class="info-row"> <span class="date"><i class=" icon-clock"> </i> <?php echo $FechaCreacion;?></span> 
<div class="row ">
<div class="col-sm-9 automobile-left-col">
<div class="ads-image">
<ul class="bxslider">
<li><img src="<?php echo $ImgUrl1;?>" alt="img"/></li>
<li><img src="<?php echo $ImgUrl2;?>" alt="img"/></li>
<li><img src="<?php echo $ImgUrl3;?>" alt="img"/></li>
</ul>
<div id="bx-pager">
<a class="thumb-item-link" data-slide-index="0" href=""><img src="<?php echo $ImgUrl1;?>" alt="img"></a>
<a class="thumb-item-link" data-slide-index="1" href=""><img src="<?php echo $ImgUrl2;?>" alt="img"/></a>
<a class="thumb-item-link" data-slide-index="2" href=""><img src="<?php echo $ImgUrl3;?>" alt="img"/></a>
</div>
</div>
 
</div>
 
<div class="col-sm-3 automobile-right-col">
<div class="inner">
<div class="key-features">

<div class="media">
<div class="media-body">
<div class="ads-action">
<ul class="list-border">
<li><a href="#"> <i class=" fa fa-heart" style="    font-size: 18px;"></i> FAVORITO </a></li>
</ul>
</div>
</div>
</div>

<div class="media">
<div class="media-body">
<span class="media-heading"><?php echo $Marca;?></span>
<span class="data-type">MARCA</span>
</div>
</div>
<div class="media">
<div class="media-body">
<span class="media-heading"><?php echo $Modelo;?></span>
<span class="data-type">MODELO</span>
</div>
</div>
<div class="media">
<div class="media-body">
<span class="media-heading"><?php echo $Anio;?></span>
<span class="data-type">AÑO</span>
</div>
</div>
<div class="media">
<div class="media-body">
<span class="media-heading"><?php echo $Tipo;?></span>
<span class="data-type">TIPO</span>
</div>
</div>
<div class="media">
<div class="media-body">
<span class="media-heading"><?php echo $Version;?></span>
<span class="data-type">VERSION</span>
</div>
</div>
<div class="media">
<div class="media-body">
<span class="media-heading"><?php echo $Estado;?></span>
<span class="data-type">ESTADO</span>
</div>

</div>
</div>
</div>
</div>
</div>
 
<div class="Ads-Details">
<h5 class="list-title"><strong>Descripcion</strong></h5>
<div class="row">
<div class="ads-details-info col-md-8">
<p><?php echo $Descripcion;?>
</div>
<div class="col-md-4">
<aside class="panel panel-body panel-details">
<ul>
<li>
<p class=" no-margin "><strong>Precio:</strong> $<?php echo $Precio;?></p>
</li>
<li>
<p class="no-margin"><strong>Condicion:</strong> <?php echo $Offert?></p>
</li>
<li>
<p class="no-margin"><strong>Estado:</strong> <?php echo $Estado;?> </p>
</li>
</ul>
</aside>
</div>
</div>
<div class="content-footer text-left"><a class="btn  btn-default" data-toggle="modal" href="#contactAdvertiser"><i class=" icon-mail-2"></i> Enviar Mensaje </a> <a class="btn  btn-info"><i class=" icon-phone-1"></i> <?php echo $telefono;?> </a></div>
</div>
</div>
 
</div>
 
<div class="col-sm-3  page-sidebar-right">
<aside>
<div class="panel sidebar-panel panel-contact-seller">
<div class="panel-heading">CONTACTO</div>
<div class="panel-content user-info">
<div class="panel-body text-center">
<div class="seller-info">
<div class="company-logo-thumb">
<?php 
if ($genero=="M") {
 echo "<a><img src='images/male.png' class='' alt='img'> </a></div>";
}
else{
     echo "<a><img src='images/female.png' class='' alt='img'> </a></div>";
}
?>

<h3 class="no-margin"> <?php echo $usuario;?></h3>
<p>Telefono: <strong><?php echo $telefono;?></strong></p>
<p> Email: <strong><?php echo $email;?></strong></p>
</div>
<div class="user-ads-action">
<a href="#contactAdvertiser" data-toggle="modal" class="btn   btn-danger btn-block" ><i class=" icon-mail-2"></i> Enviar Mensaje </a>
</div>
</div>
</div>
</div>
</aside>
</div>
 
</div>
</div>
</div>
 
<div class="footer" id="footer">
<div class="container">
<ul class=" pull-right navbar-link footer-nav">
<li> &copy; 2017 BootClassified</li>
</ul>
</div>
</div>
 
</div>
 
 
<div class="modal fade" id="reportAdvertiser" tabindex="-1" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
<h4 class="modal-title"><i class="fa icon-info-circled-alt"></i> There's something wrong with this ads?
</h4>
</div>
<div class="modal-body">
<form role="form">
<div class="form-group">
<label for="report-reason" class="control-label">Reason:</label>
<select name="report-reason" id="report-reason" class="form-control">
<option value="">Select a reason</option>
<option value="soldUnavailable">Item unavailable</option>
<option value="fraud">Fraud</option>
<option value="duplicate">Duplicate</option>
<option value="spam">Spam</option>
<option value="wrongCategory">Wrong category</option>
<option value="other">Other</option>
</select>
</div>
<div class="form-group">
<label for="recipient-email" class="control-label">Your E-mail:</label>
<input type="text" name="email" maxlength="60" class="form-control" id="recipient-email">
</div>
<div class="form-group">
<label for="message-text2" class="control-label">Message <span class="text-count">(300) </span>:</label>
<textarea class="form-control" id="message-text2"></textarea>
</div>
</form>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
<button type="button" class="btn btn-primary">Send Report</button>
</div>
</div>
</div>
</div>
 
 
<div class="modal fade" id="contactAdvertiser" tabindex="-1" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
<h4 class="modal-title"><i class=" icon-mail-2"></i> Contact advertiser </h4>
</div>
<div class="modal-body">
<form role="form">
<div class="form-group">
<label for="recipient-name" class="control-label">Name:</label>
<input class="form-control required" id="recipient-name" placeholder="Your name" data-placement="top" data-trigger="manual" data-content="Must be at least 3 characters long, and must only contain letters." type="text">
</div>
<div class="form-group">
<label for="sender-email" class="control-label">E-mail:</label>
<input id="sender-email" type="text" data-content="Must be a valid e-mail address (user@gmail.com)" data-trigger="manual" data-placement="top" placeholder="email@you.com" class="form-control email">
</div>
<div class="form-group">
<label for="recipient-Phone-Number" class="control-label">Phone Number:</label>
<input type="text" maxlength="60" class="form-control" id="recipient-Phone-Number">
</div>
<div class="form-group">
<label for="message-text" class="control-label">Message <span class="text-count">(300) </span>:</label>
<textarea class="form-control" id="message-text" placeholder="Your message here.." data-placement="top" data-trigger="manual"></textarea>
</div>
<div class="form-group">
<p class="help-block pull-left text-danger hide" id="form-error">&nbsp; The form is not
valid. </p>
</div>
</form>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
<button type="submit" class="btn btn-success pull-right">Send message!</button>
</div>
</div>
</div>
</div>
 
 
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
 
<script src="assets/js/owl.carousel.min.js"></script>
 
<script src="assets/js/jquery.matchHeight-min.js"></script>
 
<script src="assets/js/hideMaxListItem.js"></script>
 
<script src="assets/plugins/bxslider/jquery.bxslider.min.js"></script>
<script>
    $('.bxslider').bxSlider({
        pagerCustom: '#bx-pager',
        adaptiveHeight: true
    });


</script>
 
<script src="assets/js/form-validation.js"></script>
 
<script src="assets/plugins/jquery.fs.scroller/jquery.fs.scroller.js"></script>
<script src="assets/plugins/jquery.fs.selecter/jquery.fs.selecter.js"></script>
 
<script src="assets/js/script.js"></script>
</body>
</html>
