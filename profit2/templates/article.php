<html>
<head>
    <style>
        article {
            margin-top: 10px;
            margin-bottom: 10px;
            border:1px dotted red;
            padding:5px;
        }
        .menu a {
            font-size: 24px;
            padding: 10px;
        }
    </style>
    <title>Статья <?php echo $value[0]->id?></title>
</head>
<body>
<div class="menu">
    <a href="index.php"> Главная </a>
<!--    <a href="article.php"> Новая статья </a>-->
    <!--    <a href="news.php"> Новости </a>-->
    <!--    <a href="newsdb.php"> Новости БД </a>-->
    <!--    <a href="gbook.php"> Гостевая книга </a>-->


</div>
<h1>Новости</h1>
<body>

<?php foreach ($value as $key) : ?>

<h1> <?= $key->title; ?></h1>
<p><?= $key->text; ?></p>
<li><?= $key->author;?></li>
<a href="edit.php?edit=<?= $key->id;?>">Редактировать</a>
<a href="edit.php?delete=<?= $key->id;?>">Удалить</a>

<?php endforeach; ?>


</body>
</html>