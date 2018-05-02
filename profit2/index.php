<?php

//$url = $_SERVER['REQUEST_URI'];
//
//echo $url;
//
//die;


require __DIR__ . '/autoload.php';


//$users = \App\Models\User::findAll();
//
//include __DIR__.'/template/index.php';

//$view = new \App\View();
//$view->title = 'Новости';
//$view->news = \App\Models\News::findNum('5');
//$view->display(__DIR__ . '/template/index.php');
//$urlparse = parse_url($_SERVER['REQUEST_URI'],  PHP_URL_PATH);
//$url = $_SERVER['REQUEST_URI'];
//$l = mb_strrpos($url, '/')+1;
//$l2 = mb_strrpos($url, '.php');
//$action = mb_substr($url, $l, $l2-$l);

//$action = str_replace('.php', '', mb_substr($url, $l+1));

//$ctrl = mb_strrpos($url, $action);
//
//var_dump( $action);
//var_dump($_GET);
//var_dump($ctrl);
//var_dump($urlparse);

$action = (isset($_GET['act'])) ? ucfirst($_GET['act']) : false;
$ctrl = (isset($_GET['ctrl'])) ? ucfirst($_GET['ctrl']) : false;

$class = $ctrl ? '\\App\\Controllers\\' . $ctrl : '\\App\\Controllers\\News';
$action = $action ?: 'Index';

//var_dump($class);
//var_dump($ctrl);
//var_dump($action);


if (class_exists($class) !== false) {
    $controller = new $class();
    try {
        $controller->action($action);
    } catch (\App\Exceptions\Core $e) {
        echo 'Возникло исключение приложения ' . $e->getMessage();
    } catch (\App\Exceptions\Db $e) {
        echo 'Что то не так с базой ';
    }
}




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