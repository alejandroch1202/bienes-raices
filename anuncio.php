<?php

// Import the DB connection
require 'includes/app.php';

use App\Propiedad;

// Check for valide URL
$id = $_GET["id"];
$id = filter_var($id, FILTER_VALIDATE_INT);

if (!$id) {
  header("Location: /bienesraices/index.php");
}

$propiedad = Propiedad::find($id);

include_template('header');
?>

<main class="contenedor seccion contenido-centrado">
  <h1> <?php echo $propiedad->titulo ?> </h1>
  <img src="/bienesraices/img/<?php echo $propiedad->imagen ?>" alt="Imagen de la propiedad" loading="lazy" />

  <div class="resumen-propiedad">
    <p class="precio">$<?php echo $propiedad->precio ?></p>
    <ul class="iconos-caracteristicas">
      <li>
        <img src="build/img/icono_wc.svg" alt="icono wc" loading="lazy" ; />
        <p><?php echo $propiedad->wc ?></p>
      </li>
      <li>
        <img src="build/img/icono_estacionamiento.svg" alt="icono estacionamienticono_estacionamiento" loading="lazy" ; />
        <p><?php echo $propiedad->estacionamientos ?></p>
      </li>
      <li>
        <img src="build/img/icono_dormitorio.svg" alt="icono dormiicono_dormitorio" loading="lazy" ; />
        <p><?php echo $propiedad->habitaciones ?></p>
      </li>
    </ul>
    <p>
      <?php echo $propiedad->descripcion ?>
    </p>
    <!-- <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur
      earum obcaecati laboriosam itaque dolor rem voluptas repellat unde
      est, quaerat non, aliquam perspiciatis maiores provident illo dolorem
      illum libero. Quasi. Lorem ipsum dolor sit amet consectetur
      adipisicing elit. Ut amet expedita delectus quis corporis minus nisi
      quaerat magni dolores, perferendis itaque? Unde ipsam perspiciatis
      eligendi recusandae repellat, dolores cupiditate laborum.
    </p> -->
  </div>
</main>

<?php
include_template('footer');
?>