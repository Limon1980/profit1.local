<?php

//require __DIR__. '/autoload.php';
// $_SERVER['QUERY_STRING'];
$url = $_SERVER['REQUEST_URI'] ;

$url = str_replace('/profit2/','', $url);
//echo $url;
 include __DIR__.'/App/controllers/'.$url;

//$users = \App\Models\User::findAll();
//
//var_dump($users);
//
//$us = new Db;
//
//var_dump($us->execute('SELECT * FROM user'));

//$news = \App\Models\News::findNum('3');
//
//
//
//$view = new \App\View();
//$view->assign('index.php', $news);
//$view->display('index.php');
//include __DIR__. '/templates/index.php';


//$user = new \App\Models\User();
//$user->name = 'Vasya';
//$user->email = 'v@mail.ru';
//$user->insert();