<?php

require __DIR__. '/../autoload.php';

$users = \App\Models\User::findAll();

//var_dump($users);

$us = new \App\Db;

var_dump($us->execute('SELECT * FROM users WHERE id=:id', [':id' => 1]));
var_dump($us->query('SELECT * FROM users WHERE id=:id', '\App\Models\User', [':id' => 1]));