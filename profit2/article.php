<?php

require __DIR__. '/autoload.php';


$view = new \App\View();
$view->news = \App\Models\News::findById($_GET['id']);
$view->display(__DIR__ . '/template/article.php');




