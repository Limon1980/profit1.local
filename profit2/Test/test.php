<?php

require __DIR__. '/../autoload.php';

//use App\Model; // тайп Хинтинг родительский класс
use App\Models\User; //тайп Хинтинг класс
//use App\Models\HasEmail; можно тайп Хинтинг интерфейсы
                //$s = \App\Singleton::instance();
                //$s->counter = 1;
                //var_dump($s);
                //
                //$s = \App\Singleton::instance();
                //var_dump($s);
$users = \App\Models\User::findAll();

//var_dump($users);

//$us = new \App\Db;
//
//var_dump($us->execute('SELECT * FROM users WHERE id=:id', [':id' => 2]));
//var_dump($us->query('SELECT * FROM users WHERE name=:a', '\App\Models\User', [':a' => 'Вася Пупкин']));
//
//echo '<br>';
//var_dump(\App\Models\User::findById('3'));
//
//$news = \App\Models\News::findAll();
//var_dump($news);

function sendEmail (User $users, string $message)
{
    echo 'Почта уходит на '. $users->email;
}

sendEmail($users[0], 'Hello');