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
<!-- Footable -->
<link rel="stylesheet" type="text/css" href="assets/plugins/footable/css/footable.core.min.css">
 
 
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
 
<script>
        paceOptions = {
            elements: true
        };
 </script>

 <script type="text/javascript">

	//$(document).ajaxStop(function(){
	  //  window.location.reload();
	//});

	function saveIdModal(id)
	{
		document.getElementById('id_hide').value=id;
	}

	function eliminar_anuncio(id)
	{
		var Id = id;
	    if(Id>0){
	        $.ajax({
	            type:'GET',
	            url:'controller/delete_anuncio.php?Id='+Id,
	            success:function(data){
	                  alert('Registro eliminado satistactoriamente.');
	                  location.reload();
	            }
	        }); 
	    }else{
	        alert('Error al eliminar registro.');
	    }	    
	    $('.modal').modal('hide');
	    // location.href = './controller/delete_anuncio.php?id='+id;
	}

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
<a href="index.php" class="navbar-brand logo logo-title colortitulo">
 
<span class="logo-icon"><img src="images/to2autorep.png" /> </span>
TODO<span>REPUESTOS </span> </a></div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav navbar-right enlace">
<li class="dropdown"><a class="enlace" href="#" class="dropdown-toggle" data-toggle="dropdown">
<?php

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
<li><a class="enlace" href="#">Salir</a></li>
<li class="postadd"><a class="btn btn-block  btn-border btn-post btn-danger" href="post-ads.php">publicar!</a></li>
</ul>
</div>
 
</div>
 
</nav>
</div>
 
<div class="main-container">
<div class="container">
<div class="row">
<div class="col-sm-3 page-sidebar">
<aside>
<div class="inner-box">
<div class="user-panel-sidebar">
<div class="collapse-box">
<h5 class="collapse-title no-border">Mis Clasificados<a class="pull-right" data-toggle="collapse" href="#MyClassified"><i class="fa fa-angle-down"></i></a></h5>
<div id="MyClassified" class="panel-collapse collapse in">
<ul class="acc-list">
<li><a href="#"><i class="icon-home"></i> Mi Perfil </a>
</li>
</ul>
</div>
</div>
 
<div class="collapse-box">
<h5 class="collapse-title"> Mis Anuncios <a class="pull-right" data-toggle="collapse" href="#MyAds"><i class="fa fa-angle-down"></i></a>
</h5>
<div id="MyAds" class="panel-collapse collapse in">
<ul class="acc-list">
<li class="active"><a href="#"><i class="icon-docs"></i> Mis Anuncios <span class="badge">42</span> </a></li>
<li><a href="#"><i class="icon-heart"></i> Anuncios Premium <span class="badge">42</span> </a></li>
<!--<li><a href="account-saved-search.html"><i class="icon-star-circled"></i> Busquedas <span class="badge">42</span> </a></li>-->
<li><a href="#"><i class="icon-folder-close"></i> Archivos <span class="badge">42</span></a></li>
<li><a href="#"><i class="icon-hourglass"></i> Por Aprobar <span class="badge">42</span></a></li>
</ul>
</div>
</div>
 
<div class="collapse-box">
<h5 class="collapse-title"> Finalizar Cuenta <a class="pull-right" data-toggle="collapse" href="#TerminateAccount"><i class="fa fa-angle-down"></i></a></h5>
<div id="TerminateAccount" class="panel-collapse collapse in">
<ul class="acc-list">
<li><a href="#"><i class="icon-cancel-circled "></i> Cerrar Cuenta </a></li>
</ul>
</div>
</div>
 
</div>
</div>
 
</aside>
</div>
 
<div class="col-sm-9 page-content">
<div class="inner-box">
<h2 class="title-2"><i class="icon-docs"></i> Mis Anuncios </h2>
<div class="table-responsive">
<div class="table-action">
<label for="checkAll">
<input type="checkbox" onclick="checkAll(this)" id="checkAll">
Seleccionar: Todo | <a href="#" class="btn btn-xs btn-danger">Eliminar <i class="glyphicon glyphicon-remove "></i></a> </label>
<div class="table-search pull-right col-xs-7">
<div class="form-group">
<label class="col-xs-4 control-label text-right">Buscar <br>
</label>
<div class="col-xs-8 searchpan">
 <input id="fooFilter" type="text" style="height: 50%;" class="form-control" placeholder="Digite para Iniciar la Busqueda...">
</div>
</div>
</div>
</div>

<!-- ================================================================================================================== -->
<!-- ================================================ MIS ANUNCIOS ==================================================== -->
<!-- ================================================================================================================== -->

<div class="panel-body panel-no-padding pn">      
<div class="tabel-responsive">

<table id="mytable" class="table table-striped table-hover mbn footable" style="font-size:11.5px" data-filter="#fooFilter" data-page-navigation=".pagination" data-page-size="5">
<thead>
<tr>
<th data-sort-ignore="true"></th>
<th > Foto</th>
<th data-sort-initial="false"> Detalle</th>
<th data-type="numeric"> Precio</th>
<th> Opci&oacute;n</th>
</tr>
</thead>
<tbody>

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
$id_usuario=1; //SESSION ID
	$sql = "SELECT * FROM productos WHERE IdUsuario=".$id_usuario;
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
					  
		echo 	"<tr>
				<td style='width:2%' class='add-img-selector'>
				<div class='checkbox'>
				<label>
				<input type='checkbox'>
				</label>
				</div>
				</td>
				<td style='width:14%' class='add-img-td'><a href='#'><img class='thumbnail  img-responsive' src='".$ruta.$row["ImgUrl1"]."' alt='img'></a></td>
				<td style='width:58%' class='ads-details-td'>
				<div>
				<p><strong> <a href='#' title='".$row["Nombre"]."'>".$row["Nombre"]."</a> </strong></p>
				<p><strong> Fecha Publicacion</strong>:".$row["FechaCreacion"]."</p>
				</p>
				</div>
				</td>
				<td style='width:16%' class='price-td'>
				<div><strong> $".$row["Precio"]."</strong></div>
				</td>
				<td style='width:10%' class='action-td'>
				<div>
				<p><a href='./post-ads-edit.php?Id=".$row["IdProducto"]."'  id='".$row["IdProducto"]."' class='btn btn-primary btn-xs'> <i class='fa fa-edit'></i> Editar </a>
				</p>
				<!--<p><a class='btn btn-info btn-xs'> <i class='fa fa-mail-forward'></i> Share
				</a></p>-->
				<p><a data-toggle='modal' href='#myModal' onClick='saveIdModal(".$row["IdProducto"].")'  id='".$row["IdProducto"]."'   class='btn btn-danger btn-xs'> <i class=' fa fa-trash'></i> Eliminar
				</a></p>
				</div>
				</td>
				</tr>";
			  
	}
	}else {
	echo "0 results";
	}

	$conn->close();
?>


<!-- 
<tr>
<td style="width:2%" class="add-img-selector">
<div class="checkbox">
<label>
<input type="checkbox">
</label>
</div>
</td>
<td style="width:14%" class="add-img-td"><a href="#"><img class="thumbnail  img-responsive" src="images/item/tp/Image00020.jpg" alt="img"></a></td>
<td style="width:58%" class="ads-details-td">
<div>
<p><strong> <a href="#" title="I pod 16 gb">I pod 16 gb </a>
</strong></p>
<p><strong> Posted On </strong>:
02-Oct-2014, 04:38 PM </p>
<p><strong>Visitors </strong>: 680 <strong>Located In:</strong> New York
</p>
</div>
</td>
<td style="width:16%" class="price-td">
<div><strong> $90</strong></div>
</td>
<td style="width:10%" class="action-td">
<div>
<p><a class="btn btn-primary btn-xs"> <i class="fa fa-edit"></i> Editar </a>
</p>
<p><a class="btn btn-danger btn-xs"> <i class=" fa fa-trash"></i> Eliminar
</a></p>
</div>
</td>
</tr>

<tr>
<td style="width:2%" class="add-img-selector">
<div class="checkbox">
<label>
<input type="checkbox">
</label>
</div>
</td>
<td style="width:14%" class="add-img-td"><a href="#"><img class="thumbnail  img-responsive" src="images/item/tp/Image00014.jpg" alt="img"></a></td>
<td style="width:58%" class="ads-details-td">
<div>
<p><strong> <a href="#" title="SAMSUNG GALAXY S CORE Duos ">SAMSUNG
GALAXY S CORE Duos </a> </strong></p>
<p><strong> Posted On </strong>:
02-Oct-2014, 04:38 PM </p>
<p><strong>Visitors </strong>: 221 <strong>Located In:</strong> New York
</p>
</div>
</td>
<td style="width:16%" class="price-td">
<div><strong> $150</strong></div>
</td>
<td style="width:10%" class="action-td">
<div>
<p><a class="btn btn-primary btn-xs"> <i class="fa fa-edit"></i> Editar </a>
</p>
<p><a class="btn btn-danger btn-xs"> <i class=" fa fa-trash"></i> Eliminar
</a></p>
</div>
</td>
</tr>

<tr>
<td style="width:2%" class="add-img-selector">
<div class="checkbox">
<label>
<input type="checkbox">
</label>
</div>
</td>
<td style="width:14%" class="add-img-td"><a href="#"><img class="thumbnail  img-responsive" src="images/item/tp/Image00002.jpg" alt="img"></a></td>
<td style="width:58%" class="ads-details-td">
<div>
<p><strong> <a href="#" title="HTC one x 32 GB intact Seal box For sale">HTC one x 32
GB intact Seal box For sale</a> </strong></p>
<p><strong> Posted On </strong>:
02-Sept-2014, 09:00 PM </p>
<p><strong>Visitors </strong>: 896 <strong>Located In:</strong> New York
</p>
</div>
</td>
<td style="width:16%" class="price-td">
<div><strong> $210</strong></div>
</td>
<td style="width:10%" class="action-td">
<div>
<p><a class="btn btn-primary btn-xs"> <i class="fa fa-edit"></i> Editar </a>
</p>
<p><a class="btn btn-danger btn-xs"> <i class=" fa fa-trash"></i> Eliminar
</a></p>
</div>
</td>
</tr>

<tr>
<td style="width:2%" class="add-img-selector">
<div class="checkbox">
<label>
<input type="checkbox">
</label>
</div>
</td>
<td style="width:14%" class="add-img-td"><a href="#"><img class="thumbnail  img-responsive" src="images/item/tp/Image00011.jpg" alt="img"></a></td>
<td style="width:58%" class="ads-details-td">
<div>
<p><strong> <a href="#" title="Sony Xperia TX ">Sony Xperia
TX </a> </strong></p>
<p><strong> Posted On </strong>:
02-Oct-2014, 04:38 PM </p>
<p><strong>Visitors </strong>: 221 <strong>Located In:</strong> New York
</p>
</div>
</td>
<td style="width:16%" class="price-td">
<div><strong> $260</strong></div>
</td>
<td style="width:10%" class="action-td">
<div>
<p><a class="btn btn-primary btn-xs"> <i class="fa fa-edit"></i> Editar </a>
</p>
<p><a class="btn btn-danger btn-xs"> <i class=" fa fa-trash"></i> Eliminar
</a></p>
</div>
</td>
</tr>
 -->

</tbody>
  <tfoot class="footer-menu">
    <tr>
      <td colspan="12">                       
        <nav class="text-right">
          <ul class="pagination hide-if-no-paging"></ul>
        </nav>
      </td>
    </tr>
  </tfoot>
</table>

</div>
</div>
<!-- ================================================================================================================== -->
<!-- ============================================ FIN MIS ANUNCIOS ==================================================== -->
<!-- ================================================================================================================== -->

</div>
 
</div>
</div>
 
</div>
 
</div>
 
</div>
 

 
<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog" style="    margin-top: 10%;    width: 40%;">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="    font-size: 18px;font-weight: 700;color: #3498DB;">
          <button type="button" class="close" data-dismiss="modal" style="    font-size: 20pt;">&times;</button>
            <span class="panel-icon"> 
          <i class="fa fa-warning"></i> 
       </span> 
       <span class="panel-title"> Mensaje de Confirmación</span> 
        </div>
        <div class="modal-body">
          <form role="form">
              <input type="hidden" id="id_hide" value="">
            <h4 class="mt5"> ¿Seguro que desea eliminar este registro?</h3>
          </form>
        </div>
        <div class="modal-footer">
        <button class="btn btn-primary" type="button" style="    width: 75px;" onClick="eliminar_anuncio(id_hide.value)">Aceptar</button>
    <button type="button" class="btn btn-primary"  data-dismiss="modal">Cancelar</button>
    </div>
        </div>
      </div>
    </div>
  </div> 

</div>
 
 
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/icheck.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.matchHeight-min.js"></script>
<script src="assets/js/hideMaxListItem.js"></script>

<!-- FooTable Plugin -->
 <script src="assets/plugins/footable/js/footable.all.min.js"></script>
<!-- FooTable Addon -->
 <script src="assets/plugins/footable/js/footable.filter.min.js"></script>
<script type="text/javascript">

  jQuery(document).ready(function() {
  	 // Init FooTable Examples
    $('.footable').footable();
    });


</script>
 
<script>

    function checkAll(bx) {
        var chkinput = document.getElementsByTagName('input');
        for (var i = 0; i < chkinput.length; i++) {
            if (chkinput[i].type == 'checkbox') {
                chkinput[i].checked = bx.checked;
            }
        }
    }

</script>
 
<script src="assets/plugins/jquery.fs.scroller/jquery.fs.scroller.js"></script>
<script src="assets/plugins/jquery.fs.selecter/jquery.fs.selecter.js"></script>
 
<script src="assets/js/script.js"></script>
</body>
</html>
