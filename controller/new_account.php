<?php
session_start();
include 'datacon.php';

// Obtengo los datos cargados en el formulario de login.
$nombres = $_POST['fNames'];
$apellidos = $_POST['lNames'];
$telefono = $_POST['phoneNumber'];
$genero = $_POST['Gender'];
$tipocuenta = $_POST['optionsRadios'];
$usuario = $_POST['correo'];
$clave = $_POST['contrasena'];
$email = $_POST['correo'];

//$value = $_POST[''];


$sql = "INSERT INTO usuarios(Nombres, Apellidos, Telefono, Genero, IdTipoCuenta, Usuario, Contrasenia, Email) VALUES('$nombres', '$apellidos', '$telefono', '$genero', $tipocuenta, '$usuario', '$clave', '$email')";
//$sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "Registro ingresado satisfactoriamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>