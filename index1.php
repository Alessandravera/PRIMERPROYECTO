<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a5601269a3.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" i
        ntegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    <title>portafolio</title>
    <link rel="icon" href="icono.ico">
</head>
<body>
    <div class="wrapper">
        <header>
            <nav class="navbar">
                <div class="brand">
                    <h2>A<span>V</span></h2>
                </div>
                <UL class="menu"> 
                    <li><a class='active' href="#">INICIO</a></li>
                    <li><a href="#">SOBRE MI</a></li>
                    <li><a class='active'  href="#">CONTACTO</a></li>
                </UL>
            </nav>
        </header>
        <main class="main">
            <div class="info-content">
                <h1> Yo soy <span>Alessandra Vera</span></h1>
                <p>¡Hola! Soy Alessandra Vera, una estudiante apasionada de ingeniería con un fuerte interés 
                    en la programacion. Actualmente, me encuentro en formación académica, donde combino 
                    conocimientos teóricos con proyectos prácticos que me permiten explorar soluciones creativas
                     y eficientes a problemas reales.</p>

                    <p> En este portafolio,  te contare un poco sobre mi. Mi objetivo es seguir creciendo como profesional, contribuyendo con ideas
                       innovadoras y aprendiendo de cada experiencia.</p>
                <a download href="#">
                     <Button class="download-cv" download="https://drive.google.com/file/d/185Aw8KM8K0tEXv5VVbwdi4nOw3GLy-8B/view?usp=drivesdk">DESCARGAR CV</Button>
                </a>
            </div>
          <img  class="img1"  src="img/foto2.jpg" alt="fotoalessandra">
        </main>
    </div>
    
<div class="sobremi">
    <img src="img/foto3.jpg" alt="fotosobremi">

<div class="info-sobremi">
    <h2>SOBRE MI</h2>
    <div class="divider"></div>
        <p> Tengo 19 años y soy una persona dinámica, apasionada por el crecimiento personal y profesional. Desde muy joven, he desarrollado habilidades que van más
            allá de lo académico, como el baile, la gimnasia el ejercicio, disciplinas que me han enseñado disciplina, constancia y la importancia de superar desafíos.
            Además, mi carácter amable y colaborativo me ha permitido conectar fácilmente con las personas, creando relaciones positivas tanto en el ámbito personal como laboral.</p>
             <p> He tenido la oportunidad de trabajar en varias empresas, donde he adquirido experiencia práctica, desarrollado habilidades de comunicación y aprendido a adaptarme 
            a diferentes entornos. Estas experiencias han fortalecido mi capacidad para trabajar en equipo, resolver problemas y asumir responsabilidades con compromiso. </p>
            <button class="download-cv" > Leer mas </button>
        
    </div>   
</div>

<div class="contact-section">
<div class="contact-heading">
    <h2>Contactame</h2>
    <div class="divider"></div>
</div>
<div class="container-contact">
 <div class="contact-form">
    <h4> Enviame un mensaje</h4>
    <form class="form">
     <input type="text" placeholder="nombre">
     <input type="email" placeholder="Email">
     <textarea placeholder="Por favor, esribe tu mensaje aqui"></textarea>
     <button type="submit" class="btn-submit">Enviar</button>
    </form>
 </div>

</div>
</div>


<h1 class="text-center p-3  coment">COMENTARIOS</h1>
<div class="container-fluid row">
    <form class="col-4 p-4" method="POST">
        <h4 class="enviar_nota">ENVIAME UNA NOTA PUBLICA</h4>
        <?php 
        include "model/conn.php";
        include "controller/new_user.php"
        ?>
        <div class="mb-3">
            <label for="fornombreyapellido" class="form-label">Escribe tu Nombre y Apellido</label>
            <input type="text" class="form-control"  name="nombreyapellido">
        </div>

        <div class="mb-3">
            <label for="foruser" class="form-label">Escribe tu Usuario</label>
            <input type="texto" class="form-control" name="usuario" >
        </div>

        <div class="mb-3">
            <label for="foremail" class="form-label">Escribe tu Email </label>
            <input type="email" class="form-control" name="email" >
        </div>

        <div class="mb-3">
            <label for="fornota" class="form-label">Escribe tu nota</label>
            
            <textarea name="nota" placeholder="Por favor, esribe tu mensaje aqui"></textarea>
        </div>

        <div class="mb-3">
            <label for="forfecha" class="form-label">Fecha Nota</label>
            <input type="text" class="form-control" name="fecha">
        </div>

        <button type="submit" class="btn_enviar"  name="btnenviar" value="ok">ENVIAR</button>
</form>
<div class="col-6 p-6">
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">NOMBRE y APELLIDO</th>
        <th scope="col">USUARIO</th>
        <th scope="col">EMAIL</th>
        <th scope="col">NOTA</th>
        <th scope="col">FECHA NOTA</th>
      </tr>
    </thead>
    <tbody>
<?php
include "model/conn.php";
$sql = $conn->query(query: " select * from personas");
while ($datos = $sql->fetch_object()){ ?>

<tr>
         <th> <?= $datos->ID ?> </th>
        <th> <?= $datos->nombre_apellido ?></th>
        <td><?= $datos->usuario ?></td>
        <td><?= $datos->email ?></td>
        <td><?= $datos->nota ?></td>
        <td><?= $datos->fechanota ?></td>
        <td>
            <a href=""  class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
            <a href="" class="btn btn-small btn-warning"><i class="fa-solid fa-pen"></i></a>
        </td>
      </tr>

      <?php }
       ?>

    </tbody>
  </table>

</div>



</div>



<footer class="footer">
<div class="footer-container">
    <h2> Alessandra Vera</h2>
    <h5> Estudiante de ingeniería de Sistemas</h5>
    <h5> Curso: Programacion Iv </h5>
    <h6>@alessandraavera</h6>
</div>

<div class="social-networks">
    <a href="https://www.instagram.com/alessandraavera?igsh=MXAyMXY4YWViZDFp&utm_source=qr">
        <img src="icons/instagram.png" alt="">
    </a>
</div>


</body>
</html>