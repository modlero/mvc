<?php
//Model
function uploadImage($image) { //загружаем изображение
    $extension = pathinfo($image['name'], PATHINFO_EXTENSION); //узнаем расширение
    $filename = uniqid(). "." .$extension; //рандомно генирируем название файла

    move_uploaded_file($image['tmp_name'], "uploads/".$filename); //загружаем файл на сервер
    return $filename;
}
function addPost($title, $content, $filename) { //функция добавления поста
    require "database.php";
    $sql = "INSERT INTO posts (title, content, image) VALUES (:title, :content, :image)";
    $statement=$pdo->prepare($sql);
    $statement->bindParam(":title", $_POST['title']); //сокращаем
    $statement->bindParam(":content", $_POST['content']); //сокращаем

    $statement->bindParam(":image", $filename); //сокращаем
    $statement->execute();
}
function viewPost() { //функция добавления поста
    require "database.php";
    $sql = "SELECT * FROM posts";
    $statement=$pdo->prepare($sql);
    $statement->execute();
    $posts = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $posts;
}