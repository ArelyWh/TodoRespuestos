<<<<<<< HEAD
<?php

include 'datacon.php';

 if(isset($_REQUEST["Id"]) && !empty($_REQUEST["Id"]))
 {
    $id= (string) $_REQUEST['Id'];
    $sql = "DELETE FROM productos WHERE IdProducto ='$id'";

    if ($conn->query($sql) === TRUE) 
    {
        echo "Registro eliminado satisfactoriamente";
    } 
   // else 
    //{
     //   echo "Error: " . $sql . "<br>" . $conn->error;
    //}
 }

$conn->close();

=======
<?php

include 'datacon.php';

 if(isset($_REQUEST["Id"]) && !empty($_REQUEST["Id"]))
 {
    $id= (string) $_REQUEST['Id'];
    $sql = "DELETE FROM productos WHERE IdProducto ='$id'";

    if ($conn->query($sql) === TRUE) 
    {
        echo "Registro eliminado satisfactoriamente";
    } 
   // else 
    //{
     //   echo "Error: " . $sql . "<br>" . $conn->error;
    //}
 }

$conn->close();

>>>>>>> origin/master
?>