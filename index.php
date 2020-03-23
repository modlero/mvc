<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--    Bootstrap CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css">
    <title>Добавление записи</title>
</head>
<body>
<?php
//Controller{

//Model
require "post.php";

$posts = viewPost();
//}

//View
?>
<div class="container mt-5">
    <h3 class="mb-5">Наши статьи</h3>
        <div class="d-flex flex-wrap">
            <?php foreach ($posts as $post): ?>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal"><?= $post['title'] ?></h4>
                    </div>
                    <div class="card-body">
                        <img class="img-thumbnail" src="/uploads/<?= $post['image'] ?>" width="auto" height="auto">
                        <p><?= $post['content'] ?></p>
                        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Подробнее</button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>