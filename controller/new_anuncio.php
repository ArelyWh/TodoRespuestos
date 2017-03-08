<?php

include 'datacon.php';

//esta parte debe de ir en el login
$nombre="path_save";
$sql_path = "SELECT valor FROM parametros WHERE Nombre='$nombre'";
$result_path = $conn->query($sql_path);

while ($row = $result_path->fetch_assoc()) {  
    $_SESSION['path'] = $row['valor'];
 }
//hasta aqui

$ruta=$_SESSION['path'];

echo $ruta; 
// Obtengo los datos cargados en el formulario de nuevo anuncio.
$id_sub_categoria = $_REQUEST['cmbSubCategoria'];
$nombre = $_REQUEST['txtNombre'];
$cantidad = $_REQUEST['txtCantidad'];
$precio = $_REQUEST['txtPrecio'];
$Descripcion = $_REQUEST['txtDescripcion'];
$id_usuario = 1;//$_SESSION['id_usuario'];
$marca = $_REQUEST['txtMarca'];
$modelo = $_REQUEST['txtModelo'];
$anio = $_REQUEST['txtAnio'];
$tipo = $_REQUEST['txtTipo'];
$id_version = $_REQUEST['ddlVersion'];
$id_estado = $_REQUEST['ddlEstado'];
$oferta = isset($_POST['chkOferta']) && $_POST['chkOferta']  ? "1" : "0";
$usuario_creacion = 1;//$_SESSION['id_usuario'];

$date=date('Y/m/d');
$ruta= $_SESSION['path'];
if(isset($_FILES['url1'])){
      $errors= array();
      //img 1
      $file_name1 = $_FILES['url1']['name'];
      $file_size1 = $_FILES['url1']['size'];
      $file_tmp1 = $_FILES['url1']['tmp_name'];
      $file_type1 = $_FILES['url1']['type'];
      $file_ext1=strtolower(end(explode('.',$_FILES['url1']['name'])));    

      //img 2
      $file_name2 = $_FILES['url2']['name'];
      $file_size2 = $_FILES['url2']['size'];
      $file_tmp2 = $_FILES['url2']['tmp_name'];
      $file_type2 = $_FILES['url2']['type'];
      $file_ext2=strtolower(end(explode('.',$_FILES['url2']['name'])));
     
      //img 3
      $file_name3 = $_FILES['url3']['name'];
      $file_size3 = $_FILES['url3']['size'];
      $file_tmp3 = $_FILES['url3']['tmp_name'];
      $file_type3 = $_FILES['url3']['type'];
      $file_ext3=strtolower(end(explode('.',$_FILES['url3']['name'])));

      $temp1 = explode(".", $_FILES["url1"]["name"]);
      $newfilename1 =$nombre."1_". round(microtime(true)) . '.' . end($temp1);
      $temp2 = explode(".", $_FILES["url2"]["name"]);
      $newfilename2 =$nombre."2_". round(microtime(true)) . '.' . end($temp2);
      $temp3 = explode(".", $_FILES["url3"]["name"]);
      $newfilename3 =$nombre."3_". round(microtime(true)) . '.' . end($temp3);
         
      //$expensions= array("jpeg","jpg","png");
      // if(in_array($file_ext,$expensions)=== false){
      //   $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      //}

      // if($file_size > 1048576) {
      //  $errors[]='File size must be excately 1 MB';
      //}
      $ubicacion_url1 = $ruta.$newfilename1;
      $ubicacion_url2 = $ruta.$newfilename2;
      $ubicacion_url3 = $ruta.$newfilename3;
        echo "<br />";
      echo $ubicacion_url1;
        echo "<br />";
      echo $ubicacion_url2;
        echo "<br />";
      echo $ubicacion_url3;
        echo "<br />";
      
      if(empty($errors)==true) 
      {
        if(!move_uploaded_file($file_tmp1,$ubicacion_url1)){$newfilename1="";};
        if(!move_uploaded_file($file_tmp2,$ubicacion_url2)){$newfilename2="";};
        if(!move_uploaded_file($file_tmp3,$ubicacion_url3)){$newfilename3="";};

        echo "Success" ;
        $sql = "INSERT INTO productos(Nombre, Cantidad, Precio, Descripcion, IdUsuario, IdSubCategoria, Marca, Modelo, Anio, Tipo, IdVersion, IdEstado, Oferta, ImgUrl1, ImgUrl2, ImgUrl3, UsuarioCreacion) VALUES ('$nombre', '$cantidad', '$precio', 
            '$Descripcion','$id_usuario', '$id_sub_categoria','$marca', '$modelo','$anio', '$tipo', '$id_version', '$id_estado',
            '$oferta', '$newfilename1', '$newfilename2', '$newfilename3', '$usuario_creacion')";

            if ($conn->query($sql) === TRUE) 
            {
                echo "Registro ingresado satisfactoriamente";
                header('Location: ../posting-success.html');
            } 
            else 
            {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
      }
      else
      {
         print_r($errors);
      }
   }

$conn->close();

?>