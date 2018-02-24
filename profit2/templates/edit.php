<html>
<head>
    <style>
        article {
            margin-top: 10px;
            margin-bottom: 10px;
            border:1px dotted red;
            padding:5px;
        }
    </style>
    <title>Учебная  статья</title>
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
    <a href="article.php?edit=<?= $key->id;?>">Редактировать</a>
    <li><?= $key->author;?></li>
<?php endforeach; ?>


</body>
</html>