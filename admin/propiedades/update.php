<?php

require '../../includes/app.php';
user_authenticated();

use App\Propiedad;
use App\Vendedor;
use Intervention\Image\ImageManagerStatic as Image;

// Check for valide URL
$id = $_GET["id"];
$id = filter_var($id, FILTER_VALIDATE_INT);
if (!$id) {
    header("Location: /bienesraices/admin/index.php");
}

$propiedad = Propiedad::find($id);

// Get sellers
$vendedores = Vendedor::all();

// Error messages array
$errors = Propiedad::get_errors();

// Processing data from the client
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $args = $_POST["propiedad"];

    $propiedad->sync($args);

    // Generate unique name
    $img_name = md5(uniqid(rand(), true)) . ".jpg";

    // Check if the user uploaded a img
    if ($_FILES["propiedad"]["tmp_name"]["imagen"]) {

        // Resize image with Intervention\Image
        $img = Image::make($_FILES["propiedad"]["tmp_name"]["imagen"])->fit(800, 600);

        // Set the img
        $propiedad->set_img($img_name);
    }

    // Validate for errors 
    $errors = $propiedad->validate();

    if (empty($errors)) {

        if ($_FILES["propiedad"]["tmp_name"]["imagen"]) {

            $img->save(IMG_FOLDER . $img_name);
        }

        $result = $propiedad->save();
    }
}

include_template('header');
?>


<main class="contenedor seccion">
    <h1>Update property</h1>

    <a href="/bienesraices/admin/index.php" class="boton boton-verde">Return</a>

    <?php foreach ($errors as $error) { ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php } ?>

    <form class="formulario" method="POST" enctype="multipart/form-data">

        <?php include "../../includes/templates/formulario_propiedades.php" ?>

        <input class="boton boton-verde" type="submit" value="Update property">

    </form>

</main>

<?php include_template('footer'); ?>