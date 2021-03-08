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

        $this->render('index');
    }





}