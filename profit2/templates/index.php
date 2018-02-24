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
    <title>Учебная страница новостей</title>
</head>
<body>
<div class="menu">
    <a href="index.php"> Главная </a>
    <a href="article.php?new=new"> Новая статья </a>
<!--    <a href="news.php"> Новости </a>-->
<!--    <a href="newsdb.php"> Новости БД </a>-->
<!--    <a href="gbook.php"> Гостевая книга </a>-->


</div>

<h1>Новости</h1>
<hr>
<?php foreach ($value as $key) : ?>
    <article>
        <a href="article.php?id=<?php echo $key->id;?>"><h3><?php echo $key->title; ?></h3></a>
        <div><?php echo $key->author; ?></div>
    </article>
<?php endforeach; ?>

<editor>Некий текст</editor>

</body>
</html>