<?php
require '../../includes/app.php';

use App\Propiedad;
use App\Vendedor;
use Intervention\Image\ImageManagerStatic as Image;

user_authenticated();

$propiedad = new Propiedad;

// Get all sellers
$vendedores = Vendedor::all();

// Error messages array
$errors = Propiedad::get_errors();

// Processing data from the client
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Create a new instance of Propiedad
    $propiedad = new Propiedad($_POST["propiedad"]);

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

        // If not exists, create a folder
        if (!is_dir(IMG_FOLDER)) {
            mkdir(IMG_FOLDER);
        }

        // Save the image in the server
        $img->save(IMG_FOLDER . $img_name);

        // Save in the database
        $propiedad->save();
    }
}

include_template('header');
?>

<main class="contenedor seccion">
    <h1>Create</h1>

    <a href="/bienesraices/admin/index.php" class="boton boton-verde">Return</a>

    <?php foreach ($errors as $error) { ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php } ?>

    <form class="formulario" method="POST" action="/bienesraices/admin/propiedades/create.php" enctype="multipart/form-data">

        <?php include "../../includes/templates/formulario_propiedades.php"  ?>

        <input class="boton boton-verde" type="submit" value="Create property">

    </form>

</main>

<?php include_template('footer'); ?>