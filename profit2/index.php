<?php

require __DIR__. '/autoload.php';

$users = \App\Models\User::findAll();

var_dump($users);

$us = new Db;

var_dump($us->execute('SELECT * FROM user'));