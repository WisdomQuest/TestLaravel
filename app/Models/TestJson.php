<?php

namespace App\Models;

class TestJson implements \JsonSerializable
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }


    public static function add()
    {
        $example = new TestJson('John', 25);
        $json = json_encode($example);
        var_dump(get_object_vars($example));
        return $example; // {"name":"John","age":25}
    }

}
