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
<h1>Новости</h1>
<body>


<?php foreach ($value as $key) : ?>

<h1> <?= $key->title; ?></h1>
<p><?= $key->text; ?></p>
<li><?= $key->author;?></li>
<?php endforeach; ?>


</body>
</html>