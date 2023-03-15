<?php

require "funciones.php";
require "config/database.php";
require __DIR__ . "/../vendor/autoload.php";

// Connect to the Database
$db = db_connect();

use App\ActiveRecord;

ActiveRecord::set_db($db);
