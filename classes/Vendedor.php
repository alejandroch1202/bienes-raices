<?php

namespace App;

class Vendedor extends ActiveRecord
{
    protected static $table = "vendedores";
    protected static $db_rows = ["id", "nombre", "apellido", "telefono", "email"];

    public $id;
    public $nombre;
    public $apellido;
    public $telefono;
    public $email;

    public function __construct($args = [])
    {
        $this->id = $args["id"] ?? null;
        $this->nombre = $args["nombre"] ?? "";
        $this->apellido = $args["apellido"] ?? "";
        $this->telefono = $args["telefono"] ?? "";
        $this->email = $args["email"] ?? "";
    }

    public function validate()
    {
        if (!$this->nombre) {
            self::$errors[] = "You need to add the seller's name";
        }

        if (!$this->apellido) {
            self::$errors[] = "You need to add the seller's lastname";
        }

        if (!$this->telefono) {
            self::$errors[] = "You need to add the seller's phone";
        }

        if (!$this->email) {
            self::$errors[] = "You need to add the seller's email";
        }

        if (!preg_match("/[0-9]{10}/", $this->telefono)) {
            self::$errors[] = "Invalid phone format";
        }

        return self::$errors;
    }
}
