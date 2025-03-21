<?php 

if(!empty($_GET["id"])) {

    $id=$_GET["id"];
    $sql= $conn->query(query: "DELETE FROM PERSONAS WHERE ID=$id");

    if ($sql==1) {


        header(header: "../index1.php");
    }else {
        "<div class= 'alert alert-danger'>Error, intentalo de nuevo</div>";
      
    }
}



?>