<?php

require '../includes/app.php';
user_authenticated();

// Import classes
use App\Propiedad;
use App\Vendedor;

// Implement a method to get all properties
$propiedades = Propiedad::all();
$vendedores = Vendedor::all();

// Show conditional message
$result = $_GET["result"] ?? null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Validate the id
    $id = $_POST["id"];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if ($id) {
        $type = $_POST["tipo"];

        if (validate_type($type)) {
            if ($type === "propiedad") {
                $propiedad = Propiedad::find($id);
                $propiedad->delete();
            } elseif ($type === "vendedor") {
                $vendedor = Vendedor::find($id);
                $vendedor->delete();
            }
        }
    }
}

// Including header template
include_template('header');
?>

<main class="contenedor seccion">
    <h1>Real State Admin</h1>

    <?php $msg = show_msg(intval($result)); ?>
    <?php if ($msg) { ?>
        <p class="alerta exito"><?php echo s($msg) ?></p>
    <?php } ?>

    <a href="/bienesraices/admin/propiedades/create.php" class="boton boton-verde">Create property</a>
    <a href="/bienesraices/admin/vendedores/create.php" class="boton boton-amarillo">New seller</a>

    <h2>Properties</h2>

    <table class="propiedades">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Image</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody> <!-- Show data -->
            <?php foreach ($propiedades as $propiedad) { ?>

                <tr>
                    <td><?php echo $propiedad->id ?></td>
                    <td><?php echo $propiedad->titulo ?></td>
                    <td><img class="imagen-tabla" src="/bienesraices/img/<?php echo $propiedad->imagen ?>"></td>
                    <td> $ <?php echo $propiedad->precio ?></td>
                    <td>
                        <form method="POST" class="w-100">
                            <input type="hidden" name="id" value="<?php echo $propiedad->id; ?>"></a>
                            <input type="hidden" name="tipo" value="propiedad"></a>
                            <input type="submit" class="boton-rojo-block" value="Delete"></a>
                        </form>
                        <a class="boton-amarillo-block" href="/bienesraices/admin/propiedades/update.php?id= <?php echo $propiedad->id ?>">Update</a>
                    </td>
                </tr>

            <?php } ?>

        </tbody>

    </table>

    <h2>Sellers</h2>

    <table class="propiedades">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody> <!-- Show data -->
            <?php foreach ($vendedores as $vendedor) { ?>

                <tr>
                    <td><?php echo $vendedor->id ?></td>
                    <td><?php echo $vendedor->nombre . " " . $vendedor->apellido ?></td>
                    <td><?php echo $vendedor->email ?></td>
                    <td> <?php echo $vendedor->telefono ?></td>
                    <td>
                        <form method="POST" class="w-100">
                            <input type="hidden" name="id" value="<?php echo $vendedor->id; ?>"></a>
                            <input type="hidden" name="tipo" value="vendedor"></a>
                            <input type="submit" class="boton-rojo-block" value="Delete"></a>
                        </form>
                        <a class="boton-amarillo-block" href="/bienesraices/admin/vendedores/update.php?id= <?php echo $vendedor->id ?>">Update</a>
                    </td>
                </tr>

            <?php } ?>

        </tbody>

    </table>

</main>

<?php

// Including footer template
include_template('footer');

?>