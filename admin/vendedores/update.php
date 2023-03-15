<?php
require '../../includes/app.php';

use App\Vendedor;

user_authenticated();

// Validate the id
$id = $_GET["id"];
$id = filter_var($id, FILTER_VALIDATE_INT);

if (!$id) {
    header("Location: /bienesraices/admin/index.php");
}

// Get the seller object
$vendedor = Vendedor::find($id);

// Error messages array
$errors = Vendedor::get_errors();

// Processing data from the client
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Get changes made by the admin
    $args = $_POST["vendedor"];

    // Sync with the object in memory
    $vendedor->sync($args);

    // Validate for errors 
    $errors = $vendedor->validate();

    if (empty($errors)) {

        // Save in the database
        $vendedor->save();
    }
}


include_template('header');
?>

<main class="contenedor seccion">
    <h1>Registry a new seller</h1>

    <a href="/bienesraices/admin/index.php" class="boton boton-verde">Return</a>

    <?php foreach ($errors as $error) { ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php } ?>

    <form class="formulario" method="POST">

        <?php include "../../includes/templates/formulario_vendedores.php"  ?>

        <input class="boton boton-verde" type="submit" value="Save">

    </form>

</main>

<?php include_template('footer'); ?>