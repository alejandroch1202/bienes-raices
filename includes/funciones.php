<?php

define("TEMPLATES_URL", __DIR__ . "/templates");
define("FUNCIONES_URL", __DIR__ . "funciones.php");
define("IMG_FOLDER", __DIR__ . "/../img/");

// Included some specific template
function include_template(string $name, bool $inicio = false)
{
    include TEMPLATES_URL . "/{$name}.php";
}

// Check if the user is authenticated
function user_authenticated(): void
{
    session_start();

    if (!$_SESSION["login"]) {
        header("Location: /bienesraices/index.php");
    }
}

// Help printing some specific code 
function debug($code): void
{
    echo "<pre>";
    var_dump($code);
    echo "</pre>";
    exit;
}

// Escape and sanitize the HTML 
function s($html): string
{
    $s = htmlspecialchars($html);
    return $s;
}

// Validate content type 
function validate_type($type): bool
{
    $types = ["propiedad", "vendedor"];
    return in_array($type, $types);
}

// Show messages to the admin 
function show_msg($code)
{
    $msg = "";
    switch ($code) {
        case 1:
            $msg = "Succesfully created";
            break;

        case 2:
            $msg = "Succesfully updated";
            break;

        case 3:
            $msg = "Succesfully deleted";
            break;

        default:
            $msg = false;
    }

    return $msg;
}
