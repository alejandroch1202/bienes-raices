<?php
require 'includes/app.php';
include_template('header');
?>


<main class="contenedor seccion">
  <h2>Houses and apartments on sale</h2>

  <?php

  include __DIR__ . "/includes/templates/anuncios.php";

  ?>

</main>

<?php
include_template('footer');
?>