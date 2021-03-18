<?php
/**
 * Classe para gerencia URL e as Views
*/

namespace App\Controllers;

use App\Controllers\Action;
use App\Model\Container;

class IndexController extends Action
{

    public function index()
    {
        $this->view->login = isset($_GET['login']) ? $_GET['login'] : '';
        $this->render('index');
    }

    public function recupera()
    {

    }

}