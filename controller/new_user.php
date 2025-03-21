<?php  

if(!empty($_POST["btnenviar"])) {
    if (!empty($_POST ["nombreyapellido"]) and !empty($_POST ["usuario"]) and !empty($_POST ["email"]) and !empty($_POST ["nota"]) and !empty($_POST ["fecha"])  ) {

      $nombreyapellido= $_POST ["nombreyapellido"];
      $usuario= $_POST ["usuario"];
      $email= $_POST ["email"];
      $nota= $_POST ["nota"];
      $fecha= $_POST ["fecha"];

      $sql= $conn->query(query: "insert into personas (id, nombre_apellido, usuario, email, nota, fechanota) values (null, '$nombreyapellido', '$usuario', '$email', '$nota', '$fechanota')");
      if ($sql==1) {
        echo "<div class= 'alert alert-success'>Enviado</div>" ; 
    }
        else {
        echo "<div class= 'alert alert-danger'>Error, intentalo de nuevo</div>";
        }
    } else {
     echo "<div class= 'alert alert-warning'>Hay casillas vacias, intentelo de nuevo</div>" ;
    }

}

?>