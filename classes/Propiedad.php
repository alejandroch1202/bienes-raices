<?php

namespace App;

class Propiedad extends ActiveRecord
{
    protected static $table = "propiedades";
    protected static $db_rows = ["id", "titulo", "precio", "imagen", "descripcion", "habitaciones", "wc", "estacionamientos", "creado", "vendedores_id"];

    public $id;
    public $titulo;
    public $precio;
    public $imagen;
    public $descripcion;
    public $habitaciones;
    public $wc;
    public $estacionamientos;
    public $creado;
    public $vendedores_id;

    public function __construct($args = [])
    {
        $this->id = $args["id"] ?? null;
        $this->titulo = $args["titulo"] ?? "";
        $this->precio = $args["precio"] ?? "";
        $this->imagen = $args["imagen"] ?? "";
        $this->descripcion = $args["descripcion"] ?? "";
        $this->habitaciones = $args["habitaciones"] ?? "";
        $this->wc = $args["wc"] ?? "";
        $this->estacionamientos = $args["estacionamientos"] ?? "";
        $this->creado = date("Y/m/d");
        $this->vendedores_id = $args["vendedores_id"] ?? "";
    }

    public function validate()
    {
        if (!$this->titulo) {
            self::$errors[] = "You need to add some title";
        }

        if (!$this->precio) {
            self::$errors[] = "You need to add the price";
        }

        if (strlen($this->descripcion) < 50) {
            self::$errors[] = "You need to add the description and it must have at least 50 chars";
        }

        if (!$this->habitaciones) {
            self::$errors[] = "You need to add the number of rooms";
        }

        if (!$this->wc) {
            self::$errors[] = "You need to add the number of bathrooms";
        }

        if (!$this->estacionamientos) {
            self::$errors[] = "You need to add the number of parkings";
        }

        if (!$this->vendedores_id) {
            self::$errors[] = "You need to choose a seller";
        }

        if (!$this->imagen) {
            self::$errors[] = "You need to add an image";
        }

        return self::$errors;
    }
}
