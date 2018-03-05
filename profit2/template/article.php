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
<div class="navbar navbar-default"> <div class="collapse navbar-collapse" id="navbar-main"><a href="/profit2/index.php"> Главная </a><a href="edit.php?new=new"> Новая статья </a></div></div>

<h1>Новости</h1>



    <div class="panel panel-default">
        <div class="panel-heading">

            <h1> <?= $news->title; ?></h1>

        </div>
        <div class="panel-body"><p><?= $news->text; ?></p><li><?php echo $news->author->name; echo ' '. $news->author->surname?></li></div>
    </div>

    <a href="edit.php?edit=<?= $news->id;?>">Редактировать</a>
    <a href="edit.php?delete=<?= $news->id;?>">Удалить</a>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>