<?php
 include "../model/conn.php";
 $id= $_GET["id"];
 $sql= $conn->query( query:"SELECT * from personas where id=$id");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" i
        ntegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>EDITAR</title>
</head>
<body>
<form class="col-4 p-4 m-auto" method="POST">
        <h4 class="modificar_nota">MODIFICAR NOTA</h4>
         <?php 
         include "../model/conn.php";
         while($datos= $sql->fetch_object())  {
         ?>
        <div class="mb-3">
            <label for="fornombreyapellido" class="form-label">Escribe tu Nombre y Apellido</label>
            <input type="text" class="form-control"  name="nombreyapellido" value="<?=$datos->nombre_apellido  ?>">
        </div>

        <div class="mb-3">
            <label for="foruser" class="form-label">Escribe tu Usuario</label>
            <input type="texto" class="form-control" name="usuario"  value="<?=$datos->usuario  ?>" >
        </div>

        <div class="mb-3">
            <label for="foremail" class="form-label">Escribe tu Email </label>
            <input type="email" class="form-control" name="email"  value="<?=$datos->email ?>" >
        </div>

        <div class="mb-3">

            <label for="fornota" class="form-label">Escribe tu nota</label>
            <textarea  class="text.nota"  value="<?=$datos->nota?>" placeholder="Por favor, esribe tu mensaje aqui" ></textarea>
        </div>

        <div class="mb-3">
            <label for="forfecha" class="form-label">Fecha Nota</label>
            <input type="text" class="form-control" name="fechanota"   value="<?=$datos->fechanota?>">
        </div>
           <?php }  ?>
        <div class="col text-center">

        <button type="submit" class="btn btn-primary"  name="btnupdate" value="ok">MODIFICAR</button>
        </div>
</form>
</body>
</html>