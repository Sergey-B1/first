<?php
require_once 'functions.php';
mb_internal_encoding("UTF-8");
// Для загрузки файла с диска
/*if(!file_exists(DIR)){
    mkdir(DIR, 0777);
}*/
//$FileName = DIR.$file['name'];
$files = scandir(DIR, 0);

// Данные приходят из open.php

// Данные приходят из delete.php

// Переименование имени файла из OldName в NewName,
// данные приходят из edit.php

// Изменение содержимого файла OldName2 (равно OldName) в $NewContent
$NewContent = $_POST['NewContent'];
$OldName2 = $_POST['OldName2'];



// Создание нового файла с именем NewFileName и содержимым NewFileContent вручную









?>
