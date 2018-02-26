<?php
require __DIR__. '/autoload.php';





if (isset($_GET['new'])) {
    $view = new \App\View();
    $news = new \App\Models\News();
    $id = $news->insert(['title' => '', 'text' => '', 'author' => '']);
    $news = \App\Models\News::findById($id);
    $view->assign('edit.php', $news);
    $view->display('edit.php');

} elseif (isset($_GET['edit'])) {
    $view = new \App\View();
    $news = \App\Models\News::findById($_GET['edit']);
    $view->assign('edit.php', $news);
    $view->display('edit.php');

} elseif (isset($_GET['delete'])) {

    \App\Models\News::deleteById($_GET['delete']);
    $view = new \App\View();
    $news = \App\Models\News::findNum('3');
    $view->assign('index.php', $news);
    $view->display('index.php');


}elseif (isset($_POST['delete'])){
    \App\Models\News::deleteById($_POST['id']);
    $view = new \App\View();
    $news = \App\Models\News::findNum('3');
    $view->assign('index.php', $news);
    $view->display('index.php');

}

elseif (isset($_POST['title']) and isset($_POST['text']) and isset($_POST['author']) and isset($_POST['id'])){
    $view = new \App\View();
    $news = new \App\Models\News();
    $news->update($_POST['id'], ['title' => $_POST['title'], 'text' => $_POST['text'], 'author' => $_POST['author']]);
    $news =  \App\Models\News::findById($_POST['id']);
    $view->assign('edit.php', $news);
    $view->display('edit.php');


}

