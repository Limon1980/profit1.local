<?php

namespace App\Controllers;

use App\View;

class News
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
    }

    protected function actionIndex()
    {
        $this->view->title = 'Мой крутой сайт!';
        $this->view->news = \App\Models\News::findNum(5);
        $this->view->display(__DIR__ . '/../../template/index.php');
    }

    protected function actionArticle()
    {
        $id = (int)$_GET['id'];
        $this->view->news = \App\Models\News::findById($id);
        $this->view->display(__DIR__ . '/../../template/article.php');
    }

}