<?php
require __DIR__. '/autoload.php';


//$view = new \App\View();
//$view->news = \App\Models\News::findById($_GET['id']);
//$view->display(__DIR__ . '/template/article.php');
//var_dump($_GET['id']);

if (isset($_GET['new'])) {
    $news = new \App\Models\News();
    $view = new \App\View();
    $author = new \App\Models\Author();

    $view->news = $news;
    $view->news->author = $author;

    $view->display(__DIR__ . '/template/edit.php');



//    $view = new \App\View();
//    $news = new \App\Models\News();
//    $id = $news->insert(['title' => '', 'text' => '', 'author' => '']);
//    $news = \App\Models\News::findById($id);
//    $view->assign('edit.php', $news);
//    $view->display('edit.php');

} elseif (isset($_GET['edit'])) {
    $view = new \App\View();
    $view->news = \App\Models\News::findById($_GET['edit']);
    $view->display(__DIR__ . '/template/edit.php');

} elseif (isset($_GET['delete'])) {

    \App\Models\News::deleteById($_GET['delete']);
    $view = new \App\View();
    $view->news = \App\Models\News::findNum(3);
    $view->display(__DIR__ . '/template/index.php');

}

elseif (isset($_POST['title']) and isset($_POST['text']) and isset($_POST['name']) and isset($_POST['surname'])){
    $view = new \App\View();
    $news = new \App\Models\News();
    $author = new \App\Models\Author();

    $author->name = $_POST['name'];
    $author->surname = $_POST['surname'];
    $news->title = $_POST['title'];
    $news->text = $_POST['text'];


    if (!$_POST['id'])
    {
        $author_id = (\App\Models\Author::findAuthor($author))?: $author->insert2();
        $news->author_id = $author_id;
        $news->id = $news->save();

    }elseif ($_POST['id']){

        $news->id = $_POST['id'];
        $news->author_id = \App\Models\News::findById($_POST['id'])->author_id;
        $author->id = $news->author_id;
        $news->save();
        $author->save();

    }

    $view->news = \App\Models\News::findById($news->id);
    $view->display(__DIR__ . '/template/edit.php');



}

