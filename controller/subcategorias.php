
<?php
include 'datacon.php';
//function GetSubCategorias()
   // {
    $option_select="";
   
    if(isset($_REQUEST["Id"]) && !empty($_REQUEST["Id"])){
        //Get all city data
        $query = $conn->query("SELECT IdSubcategoria as Id, Nombre FROM subcategorias WHERE IdCategoria = ".$_REQUEST['Id']." ORDER BY Nombre ASC");
        
        //Count total number of rows
        $rowCount = $query->num_rows;
        
        //Display cities list
        if($rowCount > 0){
            $option_select     .=  '<option value="">-Seleccione una opcion-</option>';
            while($row = $query->fetch_assoc()){ 
                $option_select     .=  '<option value="'.$row['Id'].'">'.$row['Nombre'].'</option>';
            }
        }else{
            $option_select     .=   "<option value='-1' selected>'NO HAY REGISTROS'</option>";
        }
        echo $option_select;

       

       // return $option_select;
       // }
     }
     else
     {
        $option_select     .=   "<option value='-1' selected>'NO HAY REGISTROS'</option>";
     }

    
    //echo $_SESSION['path'];
 $conn->close();
?>