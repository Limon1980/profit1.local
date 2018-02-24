<?php


require __DIR__. '/../autoload.php';

$config = App\Config::instance();



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
$user = new \App\Models\User();
//var_dump($user->update(7, ['name' => 'Петро', 'email' => 'petro@mail.ru']));
var_dump($user->deleteById(10));
