<?php
require __DIR__. '/../../autoload.php';
$news = \App\Models\News::findNum('3');
$view = new \App\View();
$view->assign('index.php', $news);
$view->display('index.php');