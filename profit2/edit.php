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
    $author_id = $author->insert(['name' => '', 'surname' => '']);
    $id = $news->insert(['title' => '', 'text' => '', 'author_id' => $author_id ]);

    $view->news = \App\Models\News::findById($id);

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

elseif (isset($_POST['title']) and isset($_POST['text']) and isset($_POST['name']) and isset($_POST['id'])){
    $view = new \App\View();
    $news = new \App\Models\News();
    $author_id = \App\Models\News::findById($_POST['id'])->author_id;
    $author = new \App\Models\Author();

    $author->update($author_id, ['name' => $_POST['name'], 'surname' => $_POST['surname']]);
    $news->update($_POST['id'], ['title' => $_POST['title'], 'text' => $_POST['text'], 'author_id' => $author_id]);

    $view->news = \App\Models\News::findById($_POST['id']);
    $view->display(__DIR__ . '/template/edit.php');



}

