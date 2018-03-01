<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <title><?php echo $news->title; ?></title>
</head>
<body>
<div class="navbar navbar-default"> <div class="collapse navbar-collapse" id="navbar-main"><a href="index.php"> Главная </a><a href="edit.php?new=new"> Новая статья </a></div></div>

<h1>Новости</h1>


<?php if(isset($_GET['new'])){
    $button = 'Добавить';
    $input1 = '<input class="button" type="submit" name="delete" value="Удалить">';
}else {$button = 'Изменить'; $input1 = '';}?>

<form action="edit.php" method="post">
    <input type="text" name="id" placeholder="ID" value="<?= $news->id; ?>"   hidden><br>
    <input type="text" name="title" placeholder="Заголовок" value="<?= $news->title; ?>"   ><br>
    <textarea class="Add" name="text" placeholder="Текст" ><?= $news->text; ?></textarea><br>
    <input type="text" name="name" placeholder="Имя" value="<?= $news->author->name; ?>"   ><br>
    <input type="text" name="surname" placeholder="Фамилия" value="<?= $news->author->surname; ?>"   ><br>
    <br><input class="button" type="submit" name="enter" value="<?= $button?>"> <input class="button" type="reset" name="reset" value="Очистить">
    <?= $input1;?>
</form>









<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>