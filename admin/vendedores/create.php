<?php
require '../../includes/app.php';

use App\Vendedor;

user_authenticated();

$vendedor = new Vendedor;

// Error messages array
$errors = Vendedor::get_errors();

// Processing data from the client
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Create the new instance of Vendedor
    $vendedor = new Vendedor($_POST["vendedor"]);

    // Validate for errors 
    $errors = $vendedor->validate();

    if (empty($errors)) {
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

    <form class="formulario" method="POST" action="/bienesraices/admin/vendedores/create.php">

        <?php include "../../includes/templates/formulario_vendedores.php"  ?>

        <input class="boton boton-verde" type="submit" value="Registry new seller">

    </form>

</main>

<?php include_template('footer'); ?>