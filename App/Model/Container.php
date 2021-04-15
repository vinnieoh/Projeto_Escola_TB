<?php
namespace App\Model;

use App\config\Database;

class Container
{
    public static function getModel($model)
    {
        $class = "\\App\\Model\\".ucfirst($model);
        $conn = Database::getConnection();

        return new $class($conn);
    }

}