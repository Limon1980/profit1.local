<?php
/**
 * Created by PhpStorm.
 * User: GABEL
 * Date: 06.03.2018
 * Time: 13:07
 */

namespace App\Controllers;



use App\View;

class Edit extends ViewController


{
    protected function actionNew()
    {
        $news = new \App\Models\News();
        $author = new \App\Models\Author();

        if(isset($_POST['delete']) == 'Удалить')
        {
            if(isset($_POST['id'])){\App\Models\News::deleteById($_POST['id']); }
            View::redirect('/profit2/index.php');
        }

        if(isset($_POST['title']) and isset($_POST['text']) and isset($_POST['name']) and isset($_POST['surname'])){
            $author->name = $_POST['name'];
            $author->surname = $_POST['surname'];
            $news->title = $_POST['title'];
            $news->text = $_POST['text'];


        if (!$_POST['id'])
        {   $author_id = (\App\Models\Author::findAuthor($author))?: $author->insert2();
            $news->author_id = $author_id;
            $news->save();
            View::redirect('/profit2/index.php');

        }elseif($_POST['id']) {

            $news->id = $_POST['id'];
            $news->author_id = \App\Models\News::findById($_POST['id'])->author_id;
            $author->id = $news->author_id;
            $news->save();
            $author->save();
            View::redirect('/profit2/index.php');


        }}else {
            $this->view->news = $news;
            $this->view->news->author = $author;
        }
        $this->view->display(__DIR__ . '/../../template/edit.php');
    }



    protected function actionArticle()
    {
        $news = new \App\Models\News();
        $author = new \App\Models\Author();
        $id = (isset($_GET['id']))? (int) $_GET['id'] : false;
        if($id){
        $this->view->news = \App\Models\News::findById($id);
        }else {
            $this->view->news = $news;
            $this->view->news->author = $author;
        }
        $this->view->display(__DIR__ . '/../../template/edit.php');
    }

    protected function actionDelete ()
    {
          \App\Models\News::deleteById($_GET['id']);
            View::redirect('/profit2/index.php');

    }

}