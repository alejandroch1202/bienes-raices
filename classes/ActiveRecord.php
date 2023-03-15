<?php

namespace App;

class ActiveRecord
{
    // Database
    protected static $db;
    protected static $table = "";
    protected static $db_rows = [];

    // Errors
    protected static $errors = [];

    // Define the database connection
    public static function set_db($database)
    {
        self::$db = $database;
    }

    // Save into the database
    public function save()
    {
        if (!is_null($this->id)) {
            $this->update();
        } else {
            $this->create();
        }
    }
    // Save into the database
    public function create()
    {
        // Sanitize the data
        $data = $this->sanitize();
        $keys = join(", ", array_keys($data));
        $values = join("', '", array_values($data));

        // Insert into database 
        $query = " INSERT INTO " . static::$table . " ( ";
        $query .= $keys;
        $query .= ") VALUES ( ' ";
        $query .= $values;
        $query .= " ' ) ";

        $result = self::$db->query($query);


        if ($result) {
            header("Location: /bienesraices/admin/index.php?result=1");
        }
    }

    // Update an specific registry in the database
    public function update()
    {
        // Sanitize the data
        $data = $this->sanitize();
        $values = [];

        foreach ($data as $key => $value) {
            $values[] = "{$key}='{$value}'";
        }

        $query = " UPDATE " . static::$table . " SET ";
        $query .=  join(', ', $values);
        $query .=  " WHERE id = '" . self::$db->escape_string($this->id) . " '";
        $query .=  " LIMIT 1";

        $result = self::$db->query($query);

        if ($result) {
            header("Location: /bienesraices/admin/index.php?result=2");
        }
    }


    // Delete an specific registry in the database
    public function delete()
    {
        $query = "DELETE FROM " . static::$table . " WHERE id = " . self::$db->escape_string($this->id) . " LIMIT 1";
        $result = self::$db->query($query);

        if ($result) {
            $this->img_delete();
            header("Location: /bienesraices/admin/index.php?result=3");
        }
    }

    // Identity and join the attributes od the database
    public function attributes(): array
    {
        $attributes = [];
        foreach (static::$db_rows as $row) {
            if ($row === "id") continue;
            $attributes[$row] = $this->$row;
        }
        return $attributes;
    }

    // Sanitaze the data to be able to insert in the database
    public function sanitize(): array
    {
        $attributes = $this->attributes();
        $sanitized = [];

        foreach ($attributes as $key => $value) {
            $sanitized[$key] = self::$db->escape_string($value);
        }

        return $sanitized;
    }
    // Upload images 
    public function set_img($img)
    {
        // Deletes a previous img
        if (!is_null($this->id)) {
            $this->img_delete($img);
        }

        // Assing the name of the image to the image attribute 
        if ($img) {
            $this->imagen = $img;
        }
    }

    // Delete an specifyc img of the server
    public function img_delete()
    {
        // Deletes a previous img
        $img_exists = file_exists(IMG_FOLDER . $this->imagen);
        if ($img_exists) {
            unlink(IMG_FOLDER . $this->imagen);
        }
    }

    // Data validation
    public static function get_errors()
    {
        return static::$errors;
    }

    public function validate()
    {
        static::$errors = [];
        return static::$errors;
    }

    // List all registries
    public static function all(): array
    {
        $query = "SELECT * FROM " . static::$table;
        $result = self::sql_query($query);
        return $result;
    }

    // Returns specific number of registries
    public static function get($limit): array
    {
        $query = "SELECT * FROM " . static::$table . " LIMIT " . $limit;
        $result = self::sql_query($query);
        return $result;
    }

    // Find a registry by its id
    public static function find($id): object
    {
        $query = "SELECT * FROM " . static::$table . " WHERE id = {$id}";
        $result = self::sql_query($query);
        return array_shift($result);
    }

    public static function sql_query($query): array
    {
        // Query to the database
        $result = self::$db->query($query);

        // Iterate over result
        $array = [];
        while ($row = $result->fetch_assoc()) {
            $array[] = static::create_object($row);
        }

        // Free the memory
        $result->free();

        // Return result
        return $array;
    }

    protected static function create_object($row): object
    {
        $object = new static;

        foreach ($row as $key => $value) {
            if (property_exists($object, $key)) {
                $object->$key = $value;
            }
        }

        return $object;
    }

    // Sync the object in memory with the changes made for the user
    public function sync($args = [])
    {
        foreach ($args as $key => $value) {
            if (property_exists($this, $key) && !is_null($value)) {
                $this->$key = $value;
            }
        }
    }
}
