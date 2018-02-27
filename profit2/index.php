<?php

require __DIR__. '/autoload.php';

//$users = \App\Models\User::findAll();
//
//include __DIR__.'/template/index.php';

$view = new \App\View();

//$view->title = 'Мой крутой сайт!';
$view->users = \App\Models\User::findAll();
$view->title = 'Мой крутой сайт';
$view->display(__DIR__ . '/template/index.php');



//$url = $_SERVER['REQUEST_URI'];

//echo $url;


//
//var_dump($users);
//
//$us = new Db;
//
//var_dump($us->execute('SELECT * FROM user'));

//$news = \App\Models\News::findNum('5');
//$view = new \App\View();
//$view->assign('index.php', $news);
//$view->display('index.php');

//include __DIR__. '/templates/index.php';


//$user = new \App\Models\User();
//$user->name = 'Vasya';
//$user->email = 'v@mail.ru';
//$user->insert();