<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Просмотр</title>
</head>
<body>
  <p>Изменение файла </p><br>
  <p><? require_once 'main.php'; echo $open2; ?></p>

<form action="main.php" method="post">
 <p>Введите новое имя файла </p>
 <input type="text" name="newfilename"> <br>
<textarea><? require_once 'main.php'; open($open2) ?></textarea>
<p><input type="submit" value="Изменить"/></p>
</form>

<form action="index.php" method="post">
  <p><input type="submit" value="На главную"/></p>
</form>

 </body>
</html>
