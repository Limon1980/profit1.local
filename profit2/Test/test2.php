<?php


require __DIR__. '/../autoload.php';

//$config = App\Config::instance();

//$author = new \App\Models\Author();
//$author->name = 'Тарас';
//$author->surname = 'Калюжный';
//$view = new \App\View();
//var_dump($view->author = \App\Models\News::findById(1));

$news = new \App\Models\News();
$author = new \App\Models\Author();
//$news = $news->findById(2);
$author->name = 'Тарас';
$author->surname = 'Калюжный';
$author = \App\Models\Author::findAuthor($author);
var_dump($author);

die;
$view->display(__DIR__ . '/template/index.php');


//var_dump($author);




//var_dump($config->data);


//$user = new \App\Models\User();
//$user->name = 'Andre';
//$user->email = 'andre@mail.ru';
//$user->insert(['name' => 'Тарас Пупкин','email' => 'gabek@bk.ru']);

//$news = new \App\Models\News();

//$news->text = 'Vasya';
//$news->title = 'v@mail.ru';
//$news->author = 'Тарас';
//$news->update(6, ['text' => 'Проверка5', 'title' => '5555Вот такой вот титле']);
//$user = new \App\Models\User();
//var_dump($user->update(7, ['name' => 'Петро', 'email' => 'petro@mail.ru']));
//var_dump(\App\Models\News::findNum(10));
?>
