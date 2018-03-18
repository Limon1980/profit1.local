<?php
/**
 * Created by PhpStorm.
 * User: GABEL
 * Date: 06.03.2018
 * Time: 15:25
 */

namespace App\Controllers;

use App\Config;
use App\Exceptions\Core;
use App\View;

class ViewController
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function action($action)
    {
        $methodName = 'action' . $action;
        $this->beforeAction();
        return $this->$methodName();
    }

    protected function beforeAction()
    {
    $ex = new Core('Сообщение об исключении');
//    throw $ex;
    }
}