<?php
require __DIR__. '/../../autoload.php';

$article = \App\Models\News::findById($_GET['id']);
//var_dump($article);
$view = new \App\View();
$view->assign('article.php', $article);
$view->display('article.php');