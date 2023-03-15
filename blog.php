<?php
require 'includes/app.php';
include_template('header');
?>


<main class="contenedor seccion contenido-centrado">
  <h1>Our Blog</h1>
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
        <p>Written on <span>31/12/2022</span> by: <span>Admin</span></p>
        <p>
          Advices to build a terrace on the roof of your house with the best
          materials and saving money.
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
        <p>Written on <span>31/12/2022</span> by: <span>Admin</span></p>
        <p>
          Improve the space in yuor home whit this guide, learn to combine
          colors to give life to your space.
        </p>
      </a>
    </div>
  </article>

  <article class="entrada-blog">
    <div class="imagen">
      <picture>
        <source srcset="build/img/blog3.webp" type="image/webp" />
        <source srcset="build/img/blog3.jpg" type="image/jpeg" />
        <img src="build/img/blog3.jpg" alt="Entrada Blog" laoding="lazy" />
      </picture>
    </div>
    <div class="texto-entrada">
      <a href="entrada.php">
        <h4>Terrace on the roof of your house</h4>
        <p>Written on <span>31/12/2022</span> by: <span>Admin</span></p>
        <p>
          Advices to build a terrace on the roof of your house with the best
          materials and saving money.
        </p>
      </a>
    </div>
  </article>

  <article class="entrada-blog">
    <div class="imagen">
      <picture>
        <source srcset="build/img/blog4.webp" type="image/webp" />
        <source srcset="build/img/blog4.jpg" type="image/jpeg" />
        <img src="build/img/blog4.jpg" alt="Entrada Blog" laoding="lazy" />
      </picture>
    </div>
    <div class="texto-entrada">
      <a href="entrada.php">
        <h4>Guide to the decoration of your home</h4>
        <p>Written on <span>31/12/2022</span> by: <span>Admin</span></p>
        <p>
          Improve the space in yuor home whit this guide, learn to combine
          colors to give life to your space.
        </p>
      </a>
    </div>
  </article>
</main>

<?php
include_template('footer');
?>