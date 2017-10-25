<?php
mb_internal_encoding("UTF-8");
$file = $_FILES['file'];
$dir = 'upload';
if(!file_exists($dir)){
    mkdir($dir, 0777);
}
$file_name = $dir.'/'.$file['name'];

function upload(){
  $file = $_FILES['file'];
  $dir = 'upload';
  if(!file_exists($dir)){
      mkdir($dir, 0777);
  }
  $file_name = $dir.'/'.$file['name'];
if(move_uploaded_file($file['tmp_name'], $file_name))
{ echo "Файл удачно загружен!";
  echo "<p><div>  <form action='index.php'>
        <input type='submit' value='На главную'>
        </form>
      </div>
    </p>";
};
}
upload();

$files = scandir($dir, 0);

// Открытие файла $OpenFile
$OpenFile = $_GET['open'];
  define("DIR", "upload/");
  function open($OpenFile){
        if (file_exists(DIR.$OpenFile))
        {echo file_get_contents(DIR.$OpenFile);
        }
        else {
          echo "Ошибка открытия файла";
        };
      }


$delete = $_GET['delete'];
  function delete($delete){
        if (file_exists(DIR.$delete)){
          unlink(DIR.$delete);
        };
      }

// Переименование имени файла из OldName в NewName


$OldName = $_POST['OldName'];
$NewName = $_POST['NewName'];

function name_error($OldName, $NewName){
  if (file_exists(DIR.$OldName) && $OldName == $NewName) {
  echo "Файл с таким именем уже существует";
};
}

function name_edit($OldName, $NewName){
  if (file_exists(DIR.$OldName) && $OldName != $NewName){
    rename(DIR.$OldName, DIR.$NewName);
  };
}

if (!name_error ($OldName, $NewName)){
  name_edit($OldName, $NewName);
}

// Изменение содержимого файла OldName2 (равно OldName) в $NewContent
$NewContent = $_POST['NewContent'];
$OldName2 = $_POST['OldName2'];
if(!isset($OldName2, $NewContent)) {return false;}
 function content_edit($OldName2, $NewContent){
   file_put_contents(DIR.$OldName2, $NewContent);
 }

content_edit($OldName2, $NewContent);


// Создание нового файла с именем NewFileName и содержимым NewFileContent вручную









?>
