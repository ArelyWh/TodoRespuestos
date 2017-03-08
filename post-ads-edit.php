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
 
 
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
 
    <script>
        paceOptions = {
            elements: true
        };
    </script>

    <style type="text/css">
    .kv-fileinput-upload 
    {
        display: none!important;
    }
    </style>

    <script type="text/javascript">

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
 
<span class="logo-icon"><img src="images/to2autorep.png" /> </span>
TODO<span>REPUESTOS </span> </a></div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav navbar-right">

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
<li><a href="index.php" class="enlace">Salir</a></li>
<li class="postadd"><a class="btn btn-block   btn-border btn-post btn-danger" href="post-ads.php">publicar!</a></li>
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

if(isset($_REQUEST["Id"]) && !empty($_REQUEST["Id"]))
{
    $id_request= $_REQUEST["Id"];
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
        INNER JOIN usuarios u ON u.IdUsuario = P.UsuarioCreacion where IdProducto=".$id_request;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {          
        while($row = $result->fetch_assoc()) { 
            $id_categoria = $row['IdCategoria'];       
            $id_sub_categoria = $row['IdSubCategoria'];
            $nombre = $row['Nombre'];
            $cantidad = $row['Cantidad'];
            $precio = $row['Precio'];
            $descripcion = $row['Descripcion'];
            $id_usuario = $row['IdUsuario'];
            $marca = $row['Marca'];
            $modelo = $row['Modelo'];
            $anio = $row['Anio'];
            $tipo = $row['Tipo'];
            $id_version = $row['IdVersion'];
            $id_estado = $row['IdEstado'];
            $oferta = $row['Oferta'];
            $usuario_creacion = $row['UsuarioCreacion'];
            $url1 = $row['ImgUrl1'];
            $url2 = $row['ImgUrl2'];
            $url3 = $row['ImgUrl3'];
        }
    } 
}

?>
 
<div class="main-container">
<div class="container">
<div class="row">
<div class="col-md-9 page-content">
<div class="inner-box category-content">
<h2 class="title-2 uppercase"><strong> <i class="icon-docs"></i> EDITAR ANUNCIO </strong></h2>
<div class="row">
<div class="col-sm-12">
 <form class="form-horizontal" enctype="multipart/form-data" role="form" method="post" action="controller/new_anuncio.php" 
 name="frm_anuncio" id="frm_anuncio" autocomplete="off">
<fieldset>

<div class="form-group">
<label class="col-md-3 control-label" for="cmbCategoria">Categoria</label>
<div class="col-md-8">
<select name="cmbCategoria" id="cmbCategoria" class="form-control">
    <?php
      $sql = "SELECT idCategoria as Id, Nombre FROM categorias";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
         
            echo "<option value='-1'>-Seleccione una opcion-</option>";
            while($row = $result->fetch_assoc()) { 

            $id_result= $row["Id"];
            if ($id_result==$id_categoria) {
                echo   "<option selected value='".$row["Id"]."' >".$row["Nombre"]."</option>";
            }  
            else
            {
                echo   "<option value='".$row["Id"]."'>".$row["Nombre"]."</option>";
            }                
        }
        }else 
        {
            echo "<option value='-1' selected>'NO HAY REGISTROS'</option>";
        }

        //$conn->close();
    ?>
</select>
</div>
</div>
  
<div class="form-group">
<label class="col-md-3 control-label" for="cmbSubCategoria">Sub Categoria</label>
<div class="col-md-8">
<select name="cmbSubCategoria" id="cmbSubCategoria" class="form-control">
<?php
      $sql = "SELECT IdSubCategoria as Id, Nombre FROM subcategorias where idCategoria=".$id_categoria;
      $result = $conn->query($sql);         
     
        if ($result->num_rows > 0) {
             echo "<option value='-1'>-Seleccione una opcion-</option>";
             while($row = $result->fetch_assoc()) { 
                $id_result= $row["Id"];       
                if ($id_result==$id_sub_categoria) {
                    echo   "<option selected value='".$row["Id"]."' >".$row["Nombre"]."</option>";
                }  
                else
                {
                    echo   "<option value='".$row["Id"]."'>".$row["Nombre"]."</option>";
                }      
             }
        }
        else 
        {
            echo "<option value='-1' selected>'NO HAY REGISTROS'</option>";
        }
            

        //$conn->close();
    ?>
</select>
</div>
</div>
 
<div class="form-group">
<label class="col-md-3 control-label" for="txtNombre">Nombre</label>
<div class="col-md-8">
<input id="txtNombre" name="txtNombre" value="<?php echo $nombre;?>" placeholder="Nombre del producto" class="form-control input-md" required="" type="text">
</div>
</div>
 
<div class="form-group">
<label class="col-md-3 control-label" for="txtDescripcion">Breve Descripcion </label>
<div class="col-md-8">
<textarea class="form-control" id="txtDescripcion" name="txtDescripcion" placeholder="Describe tu producto brevemente"><?php echo $descripcion;?>
</textarea>
</div>
</div>
 
<div class="form-group">
<label class="col-md-3 control-label" for="txtCantidad">Cantidad</label>
<div class="col-md-4">
<input id="txtCantidad" name="txtCantidad" value="<?php echo $cantidad;?>" class="form-control input-md" required="" type="text">
<div class="col-md-4"></div>
</div>
</div>

<div class="form-group">
<label class="col-md-3 control-label" for="txtPrecio">Precio</label>
<div class="col-md-4">
<div class="input-group"><span class="input-group-addon">$</span>
<input id="txtPrecio" name="txtPrecio" value="<?php echo $precio;?>" class="form-control" placeholder="0" required="" type="text">
</div>
</div>
<div class="col-md-4">
<div class="checkbox">
<label for="chkOferta">
<input type="checkbox" id="chkOferta" name="chkOferta">
Oferta </label>
</div>
</div>
</div>
 
<div class="form-group">
<label class="col-md-3 control-label" for="textarea"> Adjuntar Imagenes </label>
<div class="col-md-7">
<div class="mb10">
<input class="col-md-7" id="url1" name="url1" type="file" class="file" accept='image/*' data-preview-file-type="text">
<button class="col-md-12 btn btn-danger" type="button"><i class="glyphicon glyphicon-upload"></i> Subir</button></div>



<table id="mytable" class="table table-striped table-hover mbn" style="font-size:11.5px">
<thead>
<tr>
<th style='width:40%'> Foto</th>
<th data-sort-initial="false" style='width:40%'> Nombre</th>
<th style='width:20%'> Opci&oacute;n</th>
</tr>
</thead>
<tbody>
<?php
 $total= 0;
    if (isset($url1) || !empty($url1) || ($url1)!="") {
        $total=$total+1;
      echo "<tr><td style='width:40%' class='add-img-td'><a href='#'><img class='thumbnail  img-responsive' src='".$ruta.$url1."' alt='img'></a></td>
      <td style='width:40%' class='ads-details-td'> ".$url1."</td>
      <td style='width:20%' class='action-td'>
        <div>
        <p><a data-toggle='modal' href='#myModal' onClick='saveIdModal(".$row["IdProducto"].")'  id='".$row["IdProducto"]."'   class='btn btn-danger btn-xs'> <i class=' fa fa-trash'></i> Remover
        </a></p>
        </div>
      </td>
      </tr>";
    }
    if (isset($url2) || !empty($url2) || ($url2)!="") {
        $total=$total+1;
      echo "<tr><td style='width:14%' class='add-img-td'><a href='#'><img class='thumbnail  img-responsive' src='".$ruta.$url2."' alt='img'></a></td>
      <td style='width:40%' class='ads-details-td'> ".$url2."</td>
      <td style='width:20%' class='action-td'>
        <div>
        <p><a data-toggle='modal' href='#myModal' onClick='saveIdModal(".$row["IdProducto"].")'  id='".$row["IdProducto"]."'   class='btn btn-danger btn-xs'> <i class=' fa fa-trash'></i> Remover
        </a></p>
        </div>
      </td>
      </tr>";
    }
    if (isset($url3) || !empty($url3) || ($url3)!="") {
        $total=$total+1;
      echo "<tr><td style='width:14%' class='add-img-td'><a href='#'><img class='thumbnail  img-responsive' src='".$ruta.$url3."' alt='img'></a></td>
      <td style='width:40%' class='ads-details-td'> ".$url3."</td>
      <td style='width:20%' class='action-td'>
        <div>
        <p><a data-toggle='modal' href='#myModal' onClick='saveIdModal(".$row["IdProducto"].")'  id='".$row["IdProducto"]."'   class='btn btn-danger btn-xs'> <i class=' fa fa-trash'></i> Remover
        </a></p>
        </div>
      </td>
      </tr>";
    }

    $_SESSION['total_img']= $total;
?>
</tbody>
</table>

<p class="help-block">Añadir hasta 3 fotos. Utilice una imagen real de su
Producto.</p>
</div>
</div>
<div class="content-subheading"><i class="icon-plus fa"></i> <strong>Informacion Adicional</strong></div>
 
<div class="form-group">
<label class="col-md-3 control-label" for="txtMarca">Marca</label>
<div class="col-md-8">
<input id="txtMarca" name="txtMarca" value="<?php echo $marca;?>" placeholder="" class="form-control input-md" required="" type="text">
</div>
</div>

<div class="form-group">
<label class="col-md-3 control-label" for="txtModelo">Modelo</label>
<div class="col-md-8">
<input id="txtModelo" name="txtModelo" value="<?php echo $modelo;?>" placeholder="" class="form-control input-md" required="" type="text">
</div>
</div>

<div class="form-group">
<label class="col-md-3 control-label" for="txtAnio">Año</label>
<div class="col-md-8">
<input id="txtAnio" name="txtAnio" value="<?php echo $anio;?>" placeholder="" class="form-control input-md" required="" type="number" min="1900" max="9999" maxlength="4">
</div>
</div>

<div class="form-group">
<label class="col-md-3 control-label" for="txtTipo">Tipo</label>
<div class="col-md-8">
<input id="txtTipo" name="txtTipo" value="<?php echo $tipo;?>" placeholder="" class="form-control input-md" required="" type="text">
</div>
</div>

<div class="form-group">
<label class="col-md-3 control-label" for="ddlVersion">Version</label>
<div class="col-md-8">
 <select id="ddlVersion" name="ddlVersion" class="form-control" required="">      
    <?php
        $sql = "SELECT IdVersion as Id, Nombre FROM versiones";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
           echo "<option value='-1' selected>-Seleccione una opcion-</option>";
             while($row = $result->fetch_assoc()) {        
                $id_result= $row["Id"];       
                if ($id_result==$id_version) 
                {
                    echo   "<option selected value='".$row["Id"]."' >".$row["Nombre"]."</option>";
                }  
                else
                {
                    echo   "<option value='".$row["Id"]."'>".$row["Nombre"]."</option>";
                }
             }      
        }
        else 
        {
            echo "<option value='-1' selected>'NO HAY REGISTROS'</option>";
        }
    ?>  
    </select>
</div>
</div>

<div class="form-group">
<label class="col-md-3 control-label" for="ddlEstado">Estado</label>
<div class="col-md-8">
    <select id="ddlEstado" name="ddlEstado" class="form-control" required="">      
     <?php
        $sql = "SELECT IdEstado as Id, Nombre FROM estados";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
           echo "<option value='-1' selected>-Seleccione una opcion-</option>";
            while($row = $result->fetch_assoc()) {        
            $id_result= $row["Id"];       
                if ($id_result==$id_estado) {
                    echo   "<option selected value='".$row["Id"]."' >".$row["Nombre"]."</option>";
                }  
                else
                {
                    echo   "<option value='".$row["Id"]."'>".$row["Nombre"]."</option>";
                }
            }
        }
        else 
        {
            echo "<option value='-1' selected>'NO HAY REGISTROS'</option>";
        }

        $conn->close();
    ?>   
    </select>
</div>
</div>
 
<div class="form-group">
<label class="col-md-3 control-label"></label>
<div class="col-md-8">
<input type="submit" id="btnGuardar" form="frm_anuncio" class="btn btn-success btn-lg" value="GUARDAR CAMBIOS">
</div>
</fieldset>
</form>
</div>
</div>
</div>
</div>
 
<div class="col-md-3 reg-sidebar">
<div class="reg-sidebar-inner text-center">
<div class="promo-text-box"><i class=" icon-picture fa fa-4x icon-color-1"></i>
<h3><strong>Post a Free Classified</strong></h3>
<p> Post your free online classified ads with us. Lorem ipsum dolor sit amet, consectetur
adipiscing elit. </p>
</div>
<div class="panel sidebar-panel">
<div class="panel-heading uppercase">
<small><strong>How to sell quickly?</strong></small>
</div>
<div class="panel-content">
<div class="panel-body text-left">
<ul class="list-check">
<li> Use a brief title and description of the item</li>
<li> Make sure you post in the correct category</li>
<li> Add nice photos to your ad</li>
<li> Put a reasonable price</li>
<li> Check the item before publish</li>
</ul>
</div>
</div>
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
 
 
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
 
<script src="assets/js/fileinput.min.js" type="text/javascript"></script>
<script>
    // initialize with defaults
    $("#url1").fileinput();
    $("#url2").fileinput();
    $("#url3").fileinput();
</script>

<script src="assets/js/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
    $('#cmbCategoria').on('change',function(){
        var Id = $(this).val();
        if(Id>0){
            $.ajax({
                type:'GET',
                url:'controller/subcategorias.php?Id='+Id,
                success:function(data){
                    $('#cmbSubCategoria').html(data);
                }
            }); 
        }else{
            $('#cmbSubCategoria').html('<option value="-1">-Seleccione una opcion-</option>'); 
        }
    });
});
</script>
 
<script src="assets/js/owl.carousel.min.js"></script>
 
<script src="assets/js/jquery.matchHeight-min.js"></script>
 
<script src="assets/js/hideMaxListItem.js"></script>
 
<script src="assets/plugins/jquery.fs.scroller/jquery.fs.scroller.js"></script>
<script src="assets/plugins/jquery.fs.selecter/jquery.fs.selecter.js"></script>
 
<script src="assets/js/script.js"></script>
</body>
</html>
