<?php

require __DIR__. '/autoload.php';

if (isset($_GET['id'])) {
    $article = \App\Models\News::findById($_GET['id']);

    $view = new \App\View();
    $view->assign('article.php', $article);
    $view->display('article.php');
}