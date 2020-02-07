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
    <a href="#" class="brand-logo" style="margin-left: 1em;">Store Online S.A  --> Administracion</a>

    <ul class="right hide-on-med-and-down">
      <?php
      // $_SESSION["id_usuario"]=$row["id"];
        session_start();
        if(isset( $_SESSION["sesion_sistema"], $_SESSION["rol"] ))
        { 
          if ( $_SESSION["sesion_sistema"]==1 and  $_SESSION["rol"] =="administrador") {
          //   echo '<li><a href="">'.$_SESSION["usuario"].'</a></li>';
          echo '<li><a href="cerrar_sesion.php">Cerrar Sesion y salir</a></li>';
          }
           else if ($_SESSION["sesion_sistema"]==0 ||  $_SESSION["rol"]!="administrador" )
         {
          echo ' <li><a href="inicio_sesion_sistema.php">Inicio de sesión</a></li>';
         }
         
        }
        else 
         {
          
          echo ' <li><a href="inicio_sesion_sistema.php">Inicio de sesión</a></li>';
         }  
        ?>
       
      
    </ul>
  </div>
</nav>