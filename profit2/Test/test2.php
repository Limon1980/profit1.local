<?php


require __DIR__. '/../autoload.php';

$config = App\Config::instance();



//var_dump($config->data);


//$user = new \App\Models\User();
//$user->name = 'Vasya';
//$user->email = 'v@mail.ru';
//var_dump($user->insert());

$news = new \App\Models\News();
$news->text = 'Vasya';
$news->title = 'v@mail.ru';
$news->author = 'Тарас';
var_dump($news->insert());

