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
    <title>Учебная страница новостей</title>
</head>
<body>
<h1>Новости</h1>
<hr>
<?php foreach ($value as $key) : ?>
    <article>
        <a href="/../profit2/App/controllers/article.php?id=<?php echo $key->id;?>"><h3><?php echo $key->title; ?></h3></a>
        <div><?php echo $key->author; ?></div>
    </article>
<?php endforeach; ?>

<editor>Некий текст</editor>

</body>
</html>