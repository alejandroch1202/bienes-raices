<?php

function db_connect(): mysqli
{
    $db = new mysqli("localhost", "root", "root", "bienesraices_crud");

    if (!$db) {
        echo "Database connection error";
        exit;
    }

    return $db;
}
