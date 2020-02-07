<?php require 'encabezado_cliente.php'; 
      
?>


<div class="row " style="margin-top: 7em; margin-left: 2em;">
   
    <div class="col s9  m10 "  >
      <form method="post" action="agregar_cliente.php">
         <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input  id="name" name="name" type="text" class="validate">
          <label for="name">Nombre</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" name="last_name" type="text" class="validate">
          <label for="last_name">Apellidos</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input  id="user" name="user" type="text" class="validate">
          <label for="first_name">Usuario</label>
        </div>
      </div>
        <div class="row">
        <div class="input-field col s6">
          <input id="email" name="email" type="email" class="validate">
          <label for="email">Correo electronico</label>
        </div>
        <div class="input-field col s6" >
          <input id="address" name="address" type="text" class="validate" name="direccion">
          <label for="address">Direccion</label>
        </div>
      </div>
       <div class="row">
        <div class="input-field col s6">
          <input  id="card_no" name="card_no" type="number" class="validate">
          <label for="card_no">Numero de tarjeta</label>
        </div>
        <div class="input-field col s6">
          <input id="cvv" name="cvv" type="number" class="validate">
          <label for="cvv">cvv</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" name="password" type="password" class="validate">
          <label for="password">contraseña</label>
        </div>
      </div>
      
       <button class="btn waves-effect waves-light " type="submit" name="action">Registrar
       
      </button>
    </div>


    </form>
  </div>
      </form>

    </div>
</div>


<?php require_once 'footer_cliente.php' ?>