<?php
if (!empty($_POST["btnupdate"])) {
    if (!empty($_POST["ID"]) and !empty($_POST["nombreyapellido"]) and !empty($_POST["usuario"]) and !empty($_POST["email"]) and !empty($_POST["nota"])) {


        $ID = $_POST["ID"];
        $nombreyapellido = $_POST["nombreyapellido"];
        $usuario = $_POST["usuario"];
        $email = $_POST["email"];
        $nota = $_POST["nota"];
        $fecha = date("Y-m-d  H:i:s");

        $sql = $conn->query("update personas set nombre_apellido='$nombreyapellido', usuario='$usuario', email='$email', nota='$nota' where id=$id");
        if ($sql == 1) {
            header("location:index1.php");
            exit;
        } else {
            echo "<div class= 'alert alert-danger'>Error, intentalo de nuevo</div>";
        }
    } else {
        echo "<div class= 'alert alert-warning'>Hay casillas vacias, intentelo de nuevo </div>";
    }
}
?>