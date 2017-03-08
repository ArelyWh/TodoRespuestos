<<<<<<< HEAD
<?php
session_start();
include 'datacon.php';

// Obtengo los datos cargados en el formulario de login.
$email = $_POST['correo'];
$pass = $_POST['contrasenia'];


$sql = "SELECT * FROM usuarios WHERE Usuario = '$email' AND Contrasenia = '$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	header('Location:../category.php');
	$_SESSION['email'] = $email;
}
else{
	header('Location:../login.html');
}

	$nombre="ruta_adjuntos";
    $sql_path = "SELECT valor FROM parametros WHERE Nombre='$nombre'";
    $result_path = $conn->query($sql_path);

    while ($row = $result_path->fetch_assoc()) {  
        $_SESSION['path'] = $row['valor'];
     }

$conn->close();
=======
<?php
session_start();
include 'datacon.php';

// Obtengo los datos cargados en el formulario de login.
$email = $_POST['correo'];
$pass = $_POST['contrasenia'];


$sql = "SELECT * FROM usuarios WHERE Usuario = '$email' AND Contrasenia = '$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	header('Location:../category.php');
	$_SESSION['email'] = $email;
}
else{
	header('Location:../login.html');
}

	$nombre="ruta_adjuntos";
    $sql_path = "SELECT valor FROM parametros WHERE Nombre='$nombre'";
    $result_path = $conn->query($sql_path);

    while ($row = $result_path->fetch_assoc()) {  
        $_SESSION['path'] = $row['valor'];
     }

$conn->close();
>>>>>>> origin/master
?>