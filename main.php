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

$open = $_GET['open'];
  define("DIR", "upload/");
  function open($open){
        if (file_exists(DIR.$open))
        {echo file_get_contents(DIR.$open);
        }
        else {
          echo "Ошибка открытия файла";
        };
      }


$delete = $_GET['delete'];
  function delete($delete){
        if (file_exists(DIR.$delete))
        { unlink(DIR.$delete);
          echo "Файл успешно удалён";
        } else {
          echo "Ошибка";
        };
      }

$newfilename = $_POST['newfilename'];
$open2 = $_POST['open2'];

  function newfilename($open2, $newfilename){
    if ($newfilename == $open2){
      rename($open2, $newfilename);
    } else {
      echo "Файл с таким именем уже существует";
    };
  }
newfilename($open2, $newfilename);




















?>
