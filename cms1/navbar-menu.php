<ul class="nav navbar-nav navbar-right">
<?php   
// función para comprobar el menú activo
// Si se selecciona el menú principal, si el menú principal está activo
if ($_GET["page"]=="home") { ?>
	<li class="active">
	    <a href="home"> Inicio </a>
	</li>
<?php
}
// si no, el menú de inicio está inactivo
else { ?>
	<li>
        <a href="home"> Inicio </a>
    </li>
<?php
}

// si el menú esta seleccionado, el menú nosotros activo
if ($_GET["page"]=="about") { ?>
  <li class="active">
      <a href="about"> Acerca de </a>
  </li>
<?php
}
// si no, el menú de nosotros está inactivo
else { ?>
  <li>
        <a href="about"> Acerca de </a>
    </li>
<?php
}


// si el menú esta seleccionado, el servicios  activo
if ($_GET["page"]=="who") { ?>
  <li class="active">
        <a href="who"> Quienes Somos </a>
    </li>
<?php
}
// si no, el menú de servicios está inactivo
else { ?>
  <li>
        <a href="who"> Quienes Somos  </a>
    </li>
<?php
}
// si el menú  services esta  activo
if ($_GET["page"]=="services") { ?>
    <li class="active">
          <a href="services"> Servicios </a>
      </li>
  <?php
  }
  // si no, el menú de services está inactivo
  else { ?>
    <li>
          <a href="services"> Servicios </a>
      </li>
  <?php
  } 

// si el menú  destination esta  activo
if ($_GET["page"]=="destination") { ?>
  <li class="active">
        <a href="destination"> Destinos </a>
    </li>
<?php
}
// si no, el menú de destination está inactivo
else { ?>
  <li>
        <a href="destination"> Destinos </a>
    </li>
<?php
} 
// si el menú  agency esta  activo
if ($_GET["page"]=="agency") { ?>
    <li class="active">
          <a href="agency"> Agencias </a>
      </li>
  <?php
  }
  // si no, el menú de agency está inactivo
  else { ?>
    <li>
          <a href="agency"> Agencias </a>
      </li>
  <?php
  } 
  // si el menú  charges esta  activo
if ($_GET["page"]=="charges") { ?>
    <li class="active">
          <a href="charges"> Cargos </a>
      </li>
  <?php
  }
  // si no, el menú de charges está inactivo
  else { ?>
    <li>
          <a href="charges"> Cargos </a>
      </li>
  <?php
  }   
    
  

// si el menú  contacto esta  activo
if ($_GET["page"]=="contact") { ?>
	<li class="active">
        <a href="contact"> Contacto </a>
    </li>
<?php
}
// si no, el menú de contacto está inactivo
else { ?>
	<li>
        <a href="contact"> Contacto </a>
    </li>
<?php
}                      
?>
</ul>