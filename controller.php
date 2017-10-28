<?php
require_once 'functions.php';

// Для удаления файла
if (isset($_POST['FileDelete'])){
  $FileDelete= $_POST['FileDelete'];
  if (isset($_POST['delete_no'])){
  header ('Location: index.php');
    exit;
  }
if (isset($_POST['delete_yes'])){
    file_delete($FileDelete);
    header ('Location: index.php');
    exit;
}
}
// Для открытия файла
if (isset($_POST['FileOpen'])){
  $FileOpen= $_POST['FileOpen'];
  exit;
  }
if (isset($_POST['return'])){
    header ('Location: index.php');
    exit;
}
// Для редактирования переименования файла
if (isset($_POST['name_edit_yes'])){
if (isset($_POST['OldName']) && isset($_POST['NewName'])){
  $OldName= $_POST['OldName'];
  $NewName= $_POST['NewName'];
  name_edit($OldName, $NewName);
  header ('Location: index.php');
  exit;
  }
}
// Для изменения содержимого файла
if (isset($_POST['content_edit_yes'])){
if (isset($_POST['OldName2']) && isset($_POST['NewContent'])){
  $OldName2= $_POST['OldName2'];
  $NewContent= $_POST['NewContent'];
  content_edit($OldName2, $NewContent);
  header ('Location: index.php');
  exit;
  }
}

// Для загрузки файла
if (isset($_FILES['file'])){
  $file = $_FILES['file'];
  file_upload(file_upload($file));
  exit;
}
