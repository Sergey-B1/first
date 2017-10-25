<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Просмотр</title>
</head>
<body>
<? require_once 'main.php'; ?>
<? $OldName = $_GET['edit']; ?>
  <p>Изменение файла </p>
  <p><? echo $OldName; ?></p>

 <p>Здесь можно изменить имя файла </p>
 <form action="main.php" method="post">
 <input type="hidden" name="OldName" value="<? echo $OldName; ?>">
 <input type="text" name="NewName"> <br>
 <input type="submit" value="Изменить"/>
 </form>

 <p>Здесь можно изменить содержимое файла</p>
 <form action="main.php" method="post">
 <input type="hidden" name="OldName2" value="<? echo $OldName; ?>">
 <textarea rows="5" cols="15" name="NewContent"><? echo file_get_contents(DIR.$OldName); ?></textarea><br>
 <input type="submit" value="Изменить"/>
 </form>




 </body>
</html>
