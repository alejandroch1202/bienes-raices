<?php

// Import the DB connection
require 'includes/app.php';
$db = db_connect();

// Create an email and password
$email = "email@email.com";
$password = "123456";
$password_hashed = password_hash($password, PASSWORD_BCRYPT);

// Query to create the user
$query = "INSERT INTO usuarios (email, password) VALUES ('{$email}', '{$password_hashed}');";

// Add it to the database
$result = mysqli_query($db, $query);
