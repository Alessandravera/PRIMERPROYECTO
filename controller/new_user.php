<?php

if (!empty($_POST["btnenviar"])) {
    if (!empty($_POST["nombreyapellido"]) and !empty($_POST["usuario"]) and !empty($_POST["email"]) and !empty($_POST["nota"])) {

        $nombreyapellido = $_POST["nombreyapellido"];
        $usuario = $_POST["usuario"];
        $email = $_POST["email"];
        $nota = $_POST["nota"];
        $fecha = date("Y-m-d  H:i:s");

        $sql = $conn->query("INSERT into personas (id, nombre_apellido, usuario, email, nota) values (null, '$nombreyapellido', '$usuario', '$email', '$nota')");
        if ($sql == 1) {
            header("../index1.php");
        } else {
            echo "<div class= 'alert alert-danger'>Error, intentalo de nuevo</div>";
        }
    } else {
        echo "<div class= 'alert alert-warning'>Hay casillas vacias, intentelo de nuevo</div>";
    }
}
