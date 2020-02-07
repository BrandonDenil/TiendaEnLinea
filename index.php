<?php require_once 'encabezado_cliente.php'; 
     
?>


<div class="row ">
  <div class="">
    <div class="col s10 m6 cuerpo">
    <h2 class="header">Catalogo</h2>
    <div class="card horizontal">
      <div class="card-image">
        <img src="imagenes/slogan.jpeg" style=" width: 12em; height: 12em;">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p>Vea en nuestro catalogo los mejores productos de alta calidad que satisfacen todo tipo de necesidades tecnologicas al mejore precio</p>
        </div>
        <div class="card-action">
          <a href="catalogo.php">Ir al catalogo</a>
        </div>
      </div>
    </div>
  </div>
  <div class="col s10 m6 cuerpo">
    <h2 class="header">Tiendas</h2>
    <div class="card horizontal">
      <div class="card-image">
        <img src="imagenes/tiendas.jfif" style=" width: 12em; height: 12em;">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p>Busque y conozca todas nuestras tiendas en las que le atenderemos amablemente resolviendo todas sus dudas</p>
        </div>
        <div class="card-action">
          <a href="tiendas.php">Ir a tiendas</a>
        </div>
      </div>
    </div>
  </div>
  </div>
  
</div>


<ul class="collapsible">
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>Mision</div>
      <div class="collapsible-body"><span>Somos una empresa dedicada a la comercialización y distribución de productos informáticos, fabricación de ordenadores, desarrollo de aplicaciones informáticas de gestión, soluciones en Internet, servicio técnico y mantenimiento de equipos y sistemas informáticos, hosting, y consultoría de protección de datos. Ofreciendo una solución global a empresas, profesionales, administraciones y usuarios particulares, a todo el territorio nacional.</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">place</i>Vision</div>
      <div class="collapsible-body"><span>Pretendemos ser un referente en el mercado nacional en el sector de las TIC, y para ello abarcaremos todos los servicios que ofrecemos actualmente incrementando los que vayan surgiendo debido a la necesidad de cambio provocado por los avances tecnológicos. Esto es así ya que somos una empresa en constante innovación ya que el sector de la tecnología así lo requiere.</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">whatshot</i>Valores</div>
      <div class="collapsible-body"><span>Nuestros valores sobre los que se sostiene esta estrategia de crecimiento y diferenciación en el servicio son:
<ul>
<li>Trabajo en equipo: Promoviendo y apoyando un equipo homogéneo, polivalente e interdepartamental.</li>
<li>Colaboración: Nos integramos con nuestros proveedores y clientes para mejorar día a día la calidad con los mismos para satisfacer sus necesidades.</li>
<li>Servicio: Cumplimos con nuestros compromisos y nos hacemos responsables de nuestro rendimiento en todas nuestras decisiones y acciones, basándonos en una gran voluntad de servicio por y para nuestros clientes.</li>
<li>Innovación y mejora continua: Nos damos cuenta de la importancia de mirar hacia el futuro, por tanto ofrecemos lo último del mercado para dar un apoyo y servicio óptimo a nuestros clientes.</li>
<li>Transparencia: La implicación y compromiso del personal no sería posible sin una absoluta transparencia en los procesos, disponiendo el personal de la máxima información de la empresa.</li>

</ul></span></div>
    </li>
  </ul>


  <script type="text/javascript">
    
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.collapsible').collapsible();
  });
        
  </script>



<?php require_once 'footer_cliente.php' ?>
