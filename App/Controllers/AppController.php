<?php

namespace App\Controllers;

use App\Controllers\Action;
use App\Model\Container;


class AppController extends Action
{

    public function alunoHome()
    {
        session_start();
        echo 'Deu certo Aluno!';

        echo '<pre>';
        print_r($_SESSION);
        echo '</pre>';
    }

    public function professorHome()
    {
        session_start();
        echo 'Deu certo Professor!';

        echo '<pre>';
        print_r($_SESSION);
        echo '</pre>';
    }

    public function administracaoHome()
    {
        session_start();
        echo 'Deu certo Administracao!';

        echo '<pre>';
        print_r($_SESSION);
        echo '</pre>';
    }

}