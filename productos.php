﻿<?php

   include 'config.php';
   include 'conexion.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

<style>
  .slider{
    background-image: url("images/uno.jpg");
    height: 100vh;
    background-size: cover;
    background-position: center;
  }

  .sticky-top-2{
    position: -webkit-sticky;
    position: sticky;
    top:120px;
    z-index: 1030;
  }

  body{
background-image: url(images/fondopr.png);
background-size: 100vw 100vh;
background-attachment: fixed;

  }

  p{
    font-size: 1rem;
  }
</style>
<title>PRODUCTOS</title>
  </head>
  <body>

<!-- LOGO -->
<nav class="navbar sticky-top"style="background:#F7EFCE">
  <a class="navbar-brand d-flex justify-content-center" href="#">
    <img src="images/logob3.png" width="205" height="120" alt="">
  </a>
</nav>

   <!-- MENU -->
   <nav class="navbar navbar-light navbar-toggleable-sm sticky-top-2" style="background: 
   linear-gradient(#F3CD94, #EBBD79,#E0AD60,#D09C4C)">
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="d-flex align-items-center collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="nosotros.html">NOSOTROS</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="index.html">INICIO<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          REGISTRO
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="registro.html">REGISTRATE</a>
          <a class="dropdown-item" href="iniciar.html">INICIAR SESIÓN</a>
        </div>
      </li>
    </ul>
<!-- LOGO -->
     <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="carrito.html">CARRITO <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">PRODUCTOS</a>
      </li>
    </ul>
  </div>     
   </nav>

<!-- container -->

<saction class="container">
   <font face="Forte">
  <h1 class="mt-5 display-4  text-center mb-5" style="text-shadow: 7px 5px 10px gray">PRODUCTOS</h1></font>
</saction>


<div class="container" style="background: rgba(0,0,0,0.4);">
  <div class="row">
    <div class="col-12">
      <p></p>
    </div>
</div>
</div>

<div class="container text-center" style="background: rgba(0,0,0,0.4);" >
  <div class="row">

<?php
  $sentencia=$pdo->prepare ("SELECT * FROM 'productos' WHERE ncategoria=3");
  $sentencia->execute();
  $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC); ?>

    <div class="col-4">
     <div class="card-deck">
  
  <div class="card">
    <img 
    title="

    DESCRIPCIÓN: 

  <?php echo $producto['descripcion']; ?>"


    alt="<?php echo $producto['imagen']; ?>"  
    class="card-img-top img-fluid" 
    src="images/<?php echo $producto['imagen']; ?>" 
    data-toggle="popover"
    data-trigger="hover"
    height="317px"
    title="<?php echo $producto['nombre']; ?>" 
    data-content="<?php echo $producto['descripcion'];
     ?>"
    >

    <div class="card-body">
      <h5 class="card-title"><?php echo $producto['nombre']; ?></h5>
      <p class="card-text"> $ <?php echo $producto['precio']; ?>. <br>DESCRIPCIÓN</p>

  <!-- formulario -->
<form action="" method="post">
<input type="hidden" name="idp" id="idp" value="<?php echo openssl_encrypt ($producto['idp'],COD,KEY); ?>">
<input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt ($producto['nombre'],COD,KEY); ?>">  
<input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt ($producto['precio'],COD,KEY); ?>">   
<input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt (1,COD,KEY) ?>">

<!-- boton -->
     <div class="card-footer">
      <button class="btn btn-primary" 
      name="btnAccion"
      value="AGREGAR"
      type="submit" >AGREGAR AL CARRITO</button>
    </div>

</form>
 
     <p> <br> </p>
   </div>
 </div>
</div>
      
    </div>
  </div>
</div>
<div class="container" style="background: rgba(0,0,0,0.4);">
  <div class="row">
    <div class="col-12">
      <p></p>
    </div>
</div>
</div>

<div class="container">
  <div class="row">
    <div class="col-12">
     <h1 class="display-1 text-center mb-5">CONTINUARÁ</h1> 
    </div>
</div>
</div>

<!-- Footer -->
<footer class="page-footer font-small unique-color-dark" style="background-color: #E5BC8E">

  <div style="background-color: #D09C4C;">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">¡Siguenos en instagram!</h6>
        </div>

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">REPOSTERÍA DALIDA</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto text-justify" style="width: 60px;">
        <p>Todo el contenido de esta página web es propiedad de REPOSTERÍA DALIDA. <br>La reproducción total o parcial del mismo está prohibida.</p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">PRODUCTOS</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="#!">CLASICOS</a>
        </p>
        <p>
          <a href="#!">PARA LA CALOR</a>
        </p>
        <p>
          <a href="#!">MEXICANISIMOS</a>
        </p>
        <p>
          <a href="#!">REGALA AMOR</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">REDES SOCIALES</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a class="d-flex justify-content-center" href="https://www.instagram.com/reposteriadalida?r=nametag">
          <img src="images/instagram.png" width="30" height="30">
        </a>
        </p>
        <p>
          <a class="d-flex justify-content-center" href="https://www.facebook.com/Reposteria-Dalida-111018520515805/?modal=admin_todo_tour">
          <img src="images/facebook.png" width="30" height="30">
          </a>
        </p>
        <p>
          <a class="d-flex justify-content-center" href="https://www.facebook.com/Reposteria-Dalida-111018520515805/?modal=admin_todo_tour">
          <img src="images/twitter.png" width="30" height="30">
          </a>
        </p>
        <p>
           <a class="d-flex justify-content-center" href="https://www.facebook.com/Reposteria-Dalida-111018520515805/?modal=admin_todo_tour">
          <img src="images/gmail.png" width="30" height="30">
          </a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">CONTACTO</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fas fa-home mr-3"></i> Principal socio: Cafeteria de CBTis 03</p>
        <p>
          <i class="fas fa-phone mr-3"></i> 246 49 7 47 54</p>
        <p>
          <i class="fas fa-print mr-3"></i> 246 203 6715</p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> REPOSTERÍA DALIDA</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>