<?php

require __DIR__. '/../autoload.php';

$users = \App\Models\User::findAll();

//var_dump($users);

$us = new \App\Db;

var_dump($us->execute('SELECT * FROM users WHERE id=:id', [':id' => 2]));
var_dump($us->query('SELECT * FROM users WHERE name=:a', '\App\Models\User', [':a' => 'Вася Пупкин']));

echo '<br>';
var_dump(\App\Models\User::findById('3'));