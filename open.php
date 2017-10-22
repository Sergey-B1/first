<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Просмотр</title>
</head>
<body>

<?  $open = $_GET['open'];
  define("DIR", "upload/");
  function open($open){
        if (file_exists(DIR.$open))
        {file_get_contents(DIR.$open);
        }
        else {
          echo "Ошибка открытия файла";
        };
      }

       ?>
<form action="" method="post">
 <p>Режим просмотра <br><? /*include 'main.php';*/ echo $open ?></p>
<textarea><? /*include 'main.php';*/ open($open) ?></textarea>
 <p><input type="submit" /></p>
</form>

 </body>
</html>
