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
<form action="main.php" method="post">
 <p>Вы действительно хотите удалить файл <? echo $delete; ?>?</p> <br>
</form>

<form action="index.php" method="post">
<p><input type="submit" value="Нет"/></p>
</form>

<form action="main.php" method="post">
 <p><input type="submit" value="Да<? delete($delete); ?>"/></p>
</form>

 </body>
</html>
