<?php
require __DIR__. '/../app/collection.php';
//
//$ex = new Exception();
//var_dump($ex)

$a = new \App\Collection();
$a[] = 1;
$a[1] = 11;
//$config = App\Config::instance();

//$config = App\Config::instance();
//$author->name = 'Ваня';
//$author->surname = 'Петро';

//$test = new \App\ExempleIntrator();
//$test->set('foo', 'bar');
//$test->set('baz', 42);
//
//
//
//foreach ($test as $key => $val) {
//    echo $key . '=>' . $val;
//    echo "\n";
//}


//var_dump($config);


//$view = new \App\View();
//var_dump($view->author = \App\Models\News::findById(1));

//$news = new \App\Models\News();
//$author = new \App\Models\Author();
//$news = $news->findById(30);
//$author->name = 'Ваня';
//$author->surname = 'Петро';
//$author->id = 19;
//$author = \App\Models\Author::findAuthor($author);
//$id = $author->save();
//var_dump($news['title']);

//die;
//$view->display(__DIR__ . '/template/index.php');


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
