<?php
mb_internal_encoding("UTF-8");

// Для загрузки файла с диска
$file = $_FILES['file'];
$dir = 'upload';
if(!file_exists($dir)){
    mkdir($dir, 0777);
}
$file_name = $dir.'/'.$file['name'];


$files = scandir($dir, 0);

// Данные приходят из open.php
$OpenFile = $_GET['open'];
  define("DIR", "upload/");

// Данные приходят из delete.php

// Переименование имени файла из OldName в NewName,
// данные приходят из edit.php
$OldName = $_POST['OldName'];
$NewName = $_POST['NewName'];
// Изменение содержимого файла OldName2 (равно OldName) в $NewContent
$NewContent = $_POST['NewContent'];
$OldName2 = $_POST['OldName2'];



// Создание нового файла с именем NewFileName и содержимым NewFileContent вручную









?>
