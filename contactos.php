<?php
require 'includes/app.php';
include_template('header');
?>


<main class="contenedor seccion">
  <h1>Contacts</h1>
  <picture>
    <source srcset="build/im/destacada3.webp" type="img/webp" />
    <source srcset="build/im/destacada3.jpg" type="img/jpeg" />
    \
    <img src="build/img/destacada3.jpg" alt="Imagen de contacto" loading="lazy" />
  </picture>
  <h2>Fill the contact form</h2>
  <form class="formulario">
    <fieldset>
      <legend>Personal information</legend>
      <label for="name">Name</label>
      <input id="name" type="text" placeholder="Your name" />

      <label for="email">Email</label>
      <input id="email" type="email" placeholder="Your email" />

      <label for="tel">Phone</label>
      <input id="tel" type="tel" placeholder="Your phone" />

      <label for="message">Message</label>
      <textarea id="message"></textarea>
    </fieldset>

    <fieldset>
      <legend>Infomation about property</legend>
      <label for="options">Sell or Buy</label>

      <select id="option">
        <option value="" selected disabled>-- Select --</option>
        <option value="Sell">Sell</option>
        <option value="Buy">Buy</option>
      </select>

      <label for="price">Price</label>
      <input id="price" type="number" placeholder="Price" />
    </fieldset>

    <fieldset>
      <legend>Contact</legend>
      <p>How yor prefer to be contacted</p>

      <div class="form-contact">
        <label for="contact-phone">Phone</label>
        <input name="contact" type="radio" value="phone" id="contact-phone" />

        <label for="contact-email">Email</label>
        <input name="contact" type="radio" value="email" id="contact-email" />
      </div>

      <p>If you chosed phone select time and hour</p>

      <label for="date">Date</label>
      <input id="date" type="date" />

      <label for="time">Time</label>
      <input id="time" type="time" min="09:00" max="18:00" />
    </fieldset>

    <input type="submit" value="Submit" class="boton-verde" />
  </form>
</main>

<?php
include_template('footer');
?>