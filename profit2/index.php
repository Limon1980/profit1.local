<?php

require __DIR__. '/autoload.php';

//$users = \App\Models\User::findAll();
//
//var_dump($users);
//
//$us = new Db;
//
//var_dump($us->execute('SELECT * FROM user'));

$news = \App\Models\News::findNum('3');



include __DIR__. '/templates/index.php';