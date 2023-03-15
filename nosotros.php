<?php
require 'includes/app.php';
include_template('header');
?>


<main class="contenedor seccion">
  <h1>Know about us</h1>

  <div class="nosotros-content">
    <picture>
      <source srcset="build/img/nosotros.webp" type="img/webp" />
      <source srcset="build/img/nosotros.jpg" type="img/jpeg" />
      <img src="build/img/nosotros.jpg" alt="Imagen nosotros" loading="lazy" />
    </picture>

    <div class="nosotros-text">
      <blockquote>25 years of experience</blockquote>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem
        ratione perspiciatis molestiae illum nulla corporis saepe recusandae
        dolor repellendus mollitia labore, quo suscipit accusamus esse hic
        fuga rem perferendis dolorum.Lorem ipsum dolor sit amet, consectetur
        adipisicing elit. Quidem ratione perspiciatis molestiae illum nulla
        corporis saepe recusandae dolor repellendus mollitia labore, quo
        suscipit accusamus esse hic fuga rem perferendis dolorum.
      </p>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem
        ratione perspiciatis molestiae illum nulla corporis saepe recusandae
        dolor repellendus mollitia labore, quo suscipit accusamus esse hic
        fuga rem perferendis dolorum.Lorem ipsum dolor sit amet, consectetur
        adipisicing elit. Quidem ratione perspiciatis molestiae illum nulla
        corporis saepe recusandae dolor repellendus mollitia labore, quo
        suscipit accusamus esse hic fuga rem perferendis dolorum.
      </p>
    </div>
  </div>

  <h1>More about us</h1>
  <div class="iconos-nosotros">
    <div class="icono">
      <img src="build/img/icono1.svg" alt="Icono seguridd" loading="lazy" />
      <h3>Security</h3>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius
        doloribus ullam illo mollitia totam iusto id pariatur! Aliquam
        obcaecati fugit similique voluptatibus, error animi recusandae
        ratione harum quaerat ab consequatur!
      </p>
    </div>
    <!-- Icon div end -->
    <div class="icono">
      <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy" />
      <h3>Precio</h3>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius
        doloribus ullam illo mollitia totam iusto id pariatur! Aliquam
        obcaecati fugit similique voluptatibus, error animi recusandae
        ratione harum quaerat ab consequatur!
      </p>
    </div>
    <!-- Icon div end -->
    <div class="icono">
      <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy" />
      <h3>Tiempo</h3>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius
        doloribus ullam illo mollitia totam iusto id pariatur! Aliquam
        obcaecati fugit similique voluptatibus, error animi recusandae
        ratione harum quaerat ab consequatur!
      </p>
    </div>
    <!-- Icon div end -->
  </div>
</main>

<?php
include_template('footer');
?>