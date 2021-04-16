<?php

namespace App\Controllers;

use App\Controllers\Action;
use App\Model\Container;


class AppController extends Action
{

    public function indexAluno()
    {
        session_start();
        echo 'Deu certo!';

        echo '<pre>';
        print_r($_SESSION);
        echo '</pre>';
    }




}