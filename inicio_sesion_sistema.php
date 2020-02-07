<?php
	require_once 'encabezado_administrador.php'
  ?>


<div class="row">
	<form style="margin: 10em;" method="post" action="inicio_sesion_sistema_val.php">
		<div class="input-field col s6 row">
          <input id="user" name="user" type="text" class="validate">
          <label for="first_name">Usuario</label>
        </div>
		<div class="input-field col s6 row">
          <input id="pass"  name="pass" type="password" class="validate">
          <label for="password">Contraseña</label>
        </div>
		<div class="row">
			
		  <button class="btn waves-effect waves-light" type="submit" name="action">Iniciar Sesion
		    		  </button>
		</div>

  
	</form>
</div>


 <?php
 		require_once 'footer_cliente.php'
   ?>