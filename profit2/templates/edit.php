<html>
<head>
    <style>
        article {
            margin-top: 10px;
            margin-bottom: 10px;
            border:1px dotted red;
            padding:5px;
        }
        .add{
        height: 40%;
        width: 40%;
        font-size: 16px;
        }
        input{
        width: 40%;
        }
        .button{
            width: 12%;
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

<?php



    foreach ($value as $key) : ?>
    <?php if(isset($_GET['new'])){
            $button = 'Добавить';
            $input1 = '<input class="button" type="submit" name="delete" value="Удалить">';
        }else {$button = 'Изменить'; $input1 = '';}?>

    <form action="edit.php" method="post">
    <input type="text" name="id" placeholder="ID" value="<?= $key->id; ?>"   ><br>
    <input type="text" name="title" placeholder="Заголовок" value="<?= $key->title; ?>"   ><br>
    <textarea class="Add" name="text" placeholder="Текст" ><?= $key->text; ?></textarea><br>
    <input type="text" name="author" placeholder="Автор" value="<?= $key->author; ?>"   ><br>
    <br><input class="button" type="submit" name="enter" value="<?= $button?>"> <input class="button" type="reset" name="reset" value="Очистить">
    <?= $input1;?>
   </form>


<?php endforeach;?>


</body>
</html>