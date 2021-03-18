<?php
namespace App\Model;

use PDO;

abstract class Model
{
    /**
     * @var PDO
     */
    protected $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function __get($attribute) {
        return $this->$attribute;
    }

    public function __set($attribute, $valor) {
        $this->$attribute = $valor;
    }

}