<fieldset>
    <legend>General info</legend>

    <label for="nombre">Name: </label>
    <input type="text" name="vendedor[nombre]" id="nombre" placeholder="Seller's name" value="<?php echo s($vendedor->nombre) ?>">

    <label for="apellido">Lastname: </label>
    <input type="text" name="vendedor[apellido]" id="apellido" placeholder="Seller's lastname" value="<?php echo s($vendedor->apellido) ?>">

</fieldset>

<fieldset>
    <legend>Contact info</legend>

    <label for="telefono">Phone: </label>
    <input type="number" name="vendedor[telefono]" id="telefono" placeholder="Seller's phone" value="<?php echo s($vendedor->telefono) ?>">

    <label for="email">Email: </label>
    <input type="email" name="vendedor[email]" id="email" placeholder="Seller's email" value="<?php echo s($vendedor->email) ?>">

</fieldset>