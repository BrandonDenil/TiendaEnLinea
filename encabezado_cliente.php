<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!--<link rel="stylesheet" type="text/css" href="/recursos/css/bootstrap.min.css">-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href = "https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" type="text/css" href="body.css">
  <script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  
</head>
<body>

<!-- Dropdown Structure -->

<nav >
  <div class="nav-wrapper black lighten-2 ">
    <a href="index.php" class="brand-logo" style="margin-left: 1em;">Store Online S.A</a>
    <ul class="right hide-on-med-and-down">
      <li><a href="catalogo.php">Catalogo de productos</a></li>
      <li><a href="tiendas.php">Sucursales</a></li>
      <?php
      // $_SESSION["id_usuario"]=$row["id"];
        session_start();
        if(isset( $_SESSION["sesion"]))
        { 
          if ( $_SESSION["sesion"]==1) {
             echo '<li><a href="">'.$_SESSION["usuario"].'</a></li>';
          echo '<li><a href="cerrar_sesion.php">Cerrar Sesion</a></li>';
          }
           else if ($_SESSION["sesion"]==0)
         {
          echo ' <li><a href="registro.php">registro</a></li>';
          echo ' <li><a href="inicio_sesion.php">Inicio de sesión</a></li>';
         }
         
        }
        else 
         {
          echo ' <li><a href="registro.php">registro</a></li>';
          echo ' <li><a href="inicio_sesion.php">Inicio de sesión</a></li>';
         }  
        ?>
       
      
    </ul>
  </div>
</nav>



