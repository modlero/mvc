<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--    Bootstrap CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Добавление записи</title>
</head>
<body>
<div class="container mt-5">
    <h1>Добавление записи</h1>
    <!--Controller-->
    <form action="add.php" method="post" enctype="multipart/form-data">
        <input type="text" name="title" class="form-control" placeholder="Введите заголовок"><br>
        <textarea name="content" cols="20" rows="5" class="form-control" placeholder="Введите запись"></textarea><br>
        <input type="file" name="image" class="form-control"><br><br>
        <button type="submit" class="btn btn-success">Добавить запись</button>
    </form>
</div>
</body>
</html>