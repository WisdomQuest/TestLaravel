<?php

namespace App\Models;

use Illuminate\Http\Request;



class  StdClass implements \JsonSerializable
{
    private $id;
    private $name;
    private $email;

    /**
     * @return mixed
     */
    public function __construct($id, $name, $email)
    {
       $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }

    public function jsonSerialize(): mixed
    {
        return get_object_vars($this);
    }


    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public static function add()
    {
        $client=[];
        $client[] = new StdClass('1','Ivan', 'Ivan@mail');
        $client[] = new StdClass('2','Petr', 'Petr@mail');
        $client[] = new StdClass('3','Ola', 'Ola@mail');

        return $client;

    }

}
