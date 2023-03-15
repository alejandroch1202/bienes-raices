<?php

// Import the DB connection
require 'includes/app.php';
$db = db_connect();

$errors = [];

// Authenticate user
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = mysqli_real_escape_string($db, filter_var($_POST["email"], FILTER_VALIDATE_EMAIL));
    $password = mysqli_real_escape_string($db, $_POST["password"]);

    if (!$email) {
        $errors[] = "Invalid email";
    }

    if (!$password) {
        $errors[] = "Invalid password";
    }

    if (empty($errors)) {

        // Check if the user exists
        $user_query = "SELECT * FROM usuarios WHERE email = '{$email}'";
        $user_result = mysqli_query($db, $user_query);

        if ($user_result->num_rows) {
            $user = mysqli_fetch_assoc($user_result);

            // Check if the password is correct
            $auth = password_verify($password, $user["password"]);

            if ($auth) {
                // User sucessfully authenticated
                session_start();
                $_SESSION["user"] = $usuario["email"];
                $_SESSION["login"] = true;

                header("Location: /bienesraices/admin/index.php");
            } else {
                $errors[] = "Password incorrect";
            }
        } else {
            $errors[] = "The user doesn't exists";
        }
    }
}

// Include the header
include_template('header');


?>


<main class="contenedor seccion contenido-centrado">
    <h1>Login</h1>

    <?php foreach ($errors as $error) { ?>
        <div class="alerta error"><?php echo $error ?></div>
    <?php } ?>

    <form method="POST" class="formulario">
        <fieldset>
            <legend>Email and password</legend>
            <label for="email">Email</label>
            <input id="email" name="email" type="email" placeholder="Your email" required />

            <label for="password">Password</label>
            <input id="password" name="password" type="password" placeholder="Your password" required />
        </fieldset>

        <input type="submit" class="boton boton-verde" value="Login">
    </form>

</main>

<?php
// Close DB session

// Include the footer
include_template('footer');
?>