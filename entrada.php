<?php
require 'includes/app.php';
include_template('header');
?>


<main class="contenedor seccion contenido-centrado">
  <h1>Terrace on the roof of your house</h1>
  <picture>
    <source srcset="build/img/destacada2.webp" type="img/webp" />
    <source srcset="build/img/destacada2.jpg" type="img/jpeg" />
    <img src="build/img/destacada2.jpg" alt="Imagen de la propiedad" loading="lazy" />
  </picture>

  <p class="meta-info">
    Written on <span>31/12/2022</span> by: <span>Admin</span>
  </p>
  <div class="resumen-propiedad">
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur
      earum obcaecati laboriosam itaque dolor rem voluptas repellat unde
      est, quaerat non, aliquam perspiciatis maiores provident illo dolorem
      illum libero. Quasi. Lorem ipsum dolor sit amet consectetur
      adipisicing elit. Ut amet expedita delectus quis corporis minus nisi
      quaerat magni dolores, perferendis itaque? Unde ipsam perspiciatis
      eligendi recusandae repellat, dolores cupiditate laborum.
    </p>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur
      earum obcaecati laboriosam itaque dolor rem voluptas repellat unde
      est, quaerat non, aliquam perspiciatis maiores provident illo dolorem
      illum libero. Quasi. Lorem ipsum dolor sit amet consectetur
      adipisicing elit. Ut amet expedita delectus quis corporis minus nisi
      quaerat magni dolores, perferendis itaque? Unde ipsam perspiciatis
      eligendi recusandae repellat, dolores cupiditate laborum.
    </p>
  </div>
</main>

<?php
include_template('footer');
?>