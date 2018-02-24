<?php

require __DIR__. '/autoload.php';


    if (isset($_GET['new'])) {
        var_dump($_GET['new']);
    } elseif (isset($_GET['edit'])) {
        var_dump($_GET['edit']);
    } elseif (isset($_GET['delete'])) {

        \App\Models\News::deleteById($_GET['delete']);
        $view = new \App\View();
        $news = \App\Models\News::findNum('3');
        $view->assign('index.php', $news);
        $view->display('index.php');


    } elseif (isset($_GET['id'])) {
        $article = \App\Models\News::findById($_GET['id']);
        if($article) {
            $view = new \App\View();
            $view->assign('article.php', $article);
            $view->display('article.php');
        }else{
         echo 'Нет такой статьи';

        }


}


