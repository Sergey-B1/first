<?php
require_once 'main.php';
// Функция для загрузки файла с диска
function upload(){
  $file = $_FILES['file'];
  $dir = 'upload';
  if(!file_exists($dir)){
      mkdir($dir, 0777);
  }
  $file_name = $dir.'/'.$file['name'];
  if(move_uploaded_file($file['tmp_name'], $file_name))
  { /*echo "Файл удачно загружен!";
    echo "<p><div>  <form action='index.php'>
        <input type='submit' value='На главную'>
        </form>
      </div>
    </p>"*/;
};}
// Функция для открытия файла
function open($OpenFile){
      if (file_exists(DIR.$OpenFile))
      {echo file_get_contents(DIR.$OpenFile);
      };
    }
// Функция для удаления файла
function file_delete($delete){
        if (!isset($delete)){
        return false;
        };
        if (file_exists(DIR.$delete)){
        unlink(DIR.$delete);
        };
        }
// Следующие три функции служат для переименования файла:
function name_error($OldName, $NewName){
    if(!isset($OldName)) {
    return false;}
    if (file_exists(DIR.$OldName) && $OldName == $NewName) {
      //  echo "Файл с таким именем уже существует";
        };
        }
function file_rename($OldName, $NewName){
  if (file_exists(DIR.$OldName) && $OldName != $NewName){
    rename(DIR.$OldName, DIR.$NewName);
    };
    }
function name_edit($OldName, $NewName){
      if (!name_error ($OldName, $NewName)){
      file_rename($OldName, $NewName);
      };
      }
// Функция для редактирования содержимого файла
function content_edit($OldName2, $NewContent){
  if(!isset($OldName2, $NewContent)) {
    return false;}
  file_put_contents(DIR.$OldName2, $NewContent);
}
