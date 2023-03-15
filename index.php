<?php
require './includes/app.php';
include_template('header', $inicio = true);
?>

<main class="contenedor seccion">
  <h1>More about us</h1>
  <div class="iconos-nosotros">
    <div class="icono">
      <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy" />
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

<section class="seccion contenedor">
  <h2>Houses and apartments on sale</h2>

  <?php

  include __DIR__ . "/includes/templates/anuncios.php";

  ?>

  <div class="alinear-derecha">
    <a class="boton-verde" href="anuncios.php">See all</a>
  </div>
</section>

<section class="imagen-contacto">
  <h2>Find the house of your dreams</h2>
  <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae
    minus enim dolorem eius ex reprehenderit non.
  </p>
  <a href="contactos.php" class="boton-amarillo">Contact</a>
</section>

<div class="contenedor seccion seccion-inferior">
  <section class="blog">
    <h3>Our blog</h3>
    <article class="entrada-blog">
      <div class="imagen">
        <picture>
          <source srcset="build/img/blog1.webp" type="image/webp" />
          <source srcset="build/img/blog1.jpg" type="image/jpeg" />
          <img src="build/img/blog1.jpg" alt="Entrada Blog" laoding="lazy" />
        </picture>
      </div>
      <div class="texto-entrada">
        <a href="entrada.php">
          <h4>Terrace on the roof of your house</h4>
          <p class="meta-info">
            Written on <span>31/12/2022</span> by: <span>Admin</span>
          </p>
          <p>
            Advices to build a terrace on the roof of your house with the
            best materials and saving money.
          </p>
        </a>
      </div>
    </article>

    <article class="entrada-blog">
      <div class="imagen">
        <picture>
          <source srcset="build/img/blog2.webp" type="image/webp" />
          <source srcset="build/img/blog2.jpg" type="image/jpeg" />
          <img src="build/img/blog2.jpg" alt="Entrada Blog" laoding="lazy" />
        </picture>
      </div>
      <div class="texto-entrada">
        <a href="entrada.php">
          <h4>Guide to the decoration of your home</h4>
          <p class="meta-info">
            Written on <span>31/12/2022</span> by: <span>Admin</span>
          </p>
          <p>
            Improve the space in yuor home whit this guide, learn to combine
            colors to give life to your space.
          </p>
        </a>
      </div>
    </article>
  </section>

  <section class="testimoniales">
    <h3>Testimoniales</h3>
    <div class="testimonial">
      <blockquote>
        The staff has a great approach, good attention and the home they
        offered me acomplish with all my expectatives.
      </blockquote>
      <p>- Alejandro Chavez</p>
    </div>
  </section>
</div>

<?php
include_template('footer');
?>