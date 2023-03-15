<fieldset>
    <legend>General info</legend>

    <label for="titulo">Titulo: </label>
    <input type="text" name="propiedad[titulo]" id="titulo" placeholder="Property title" value="<?php echo s($propiedad->titulo) ?>">

    <label for="precio">Price: </label>
    <input type="number" name="propiedad[precio]" id="precio" placeholder="Property price" value="<?php echo s($propiedad->precio) ?>">

    <label for="imagen">Image: </label>
    <input type="file" name="propiedad[imagen]" id="imagen" accept="image/jpeg, image/png">

    <?php if ($propiedad->imagen) { ?>
        <img src="/bienesraices/img/<?php echo $propiedad->imagen ?>" class="img-small" alt="Imagen propiedad">
    <?php } ?>

    <label for="descripcion">Description: </label>
    <textarea name="propiedad[descripcion]" id="descripcion"><?php echo s($propiedad->descripcion) ?></textarea>

</fieldset>

<fieldset>
    <legend>Property information</legend>

    <label for="habitaciones">Rooms: </label>
    <input type="number" name="propiedad[habitaciones]" id="habitaciones" placeholder="i.e. 3" min="1" max="9" value="<?php echo s($propiedad->habitaciones) ?>">

    <label for="wc">Baths: </label>
    <input type="number" name="propiedad[wc]" id="wc" placeholder="i.e. 3" min="1" max="9" value="<?php echo s($propiedad->wc) ?>">

    <label for="estacionamientos">Parking: </label>
    <input type="number" name="propiedad[estacionamientos]" id="estacionamientos" placeholder="i.e. 3" min="1" max="9" value="<?php echo s($propiedad->estacionamientos) ?>">

</fieldset>

<fieldset>
    <legend>Seller</legend>

    <select name="propiedad[vendedores_id]" id="vendedor">
        <option value="">-- Select one --</option>
        <?php foreach ($vendedores as $vendedor) { ?>
            <option <?php echo $propiedad->vendedores_id === $vendedor->id ? "selected" : "" ?> value="<?php echo s($vendedor->id); ?>"><?php echo s($vendedor->nombre) . " " . s($vendedor->apellido); ?></option>
        <?php } ?>
    </select>

</fieldset>