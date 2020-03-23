<?php
require "post.php";
//Controller
$filename = uploadImage($_FILES['image']); //путь картинки
addPost($title, $content, $filename); //добавляем запись

header("Location: index.php"); //переадресация на главную