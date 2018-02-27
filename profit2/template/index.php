<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <title><?php echo $title; ?></title>
</head>
<body>
<h1>Новости</h1>

<?php foreach ($news as $key) : ?>

    <div class="panel panel-default">
        <div class="panel-heading">

                <article>
                    <a href="article.php?id=<?php echo $key->id;?>"><h3><?php echo $key->title; ?></h3></a>
                </article>
        </div>
        <div class="panel-body"><?php echo $key->author; ?></div>
    </div>

<?php endforeach; ?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>