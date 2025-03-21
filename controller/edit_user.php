<?php
if (!empty($_POST["btnupdate"]))
if (!empty($_POST ["nombreyapellido"]) and !empty($_POST ["usuario"]) and !empty($_POST ["email"]) and !empty($_POST ["nota"]) and !empty($_POST ["fecha"])  ) {


    $ID= $_POST ["id"];
    $nombreyapellido= $_POST ["nombreyapellido"];
      $usuario= $_POST ["usuario"];
      $email= $_POST ["email"];
      $nota= $_POST ["nota"];
      $fecha= $_POST ["fecha"];

      $sql= $conn->query(query: "UPDATE personas set nombre_apellido= $nombreyapellido, usuario= $usuario, email= $email, nota=$nota, fechanota=$fecha where id=$id");
      if ($sql==1)  {

        header (header: "../index1.php");
      } else {
        echo "<div class= 'alert alert-danger'>Error, intentalo de nuevo</div>";
      } 
    } else {
        echo "<div class= 'alert alert-warning'>Hay casillas vacias, intentelo de nuevo</div>" ;

      }


?>