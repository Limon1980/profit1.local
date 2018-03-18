<?php

namespace App\Controllers;

use App\MultiException;
use App\View;

class News extends ViewController
{

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

    protected function actionCreate()
    {
        try {
            $article = new \App\Models\News();
            $article->fill([]);
            $article->save();

        } catch (MultiException $e){
            $this->view->errors = $e;
        }
        $this->view->display(__DIR__ . '/../../template/create.php');
    }

}