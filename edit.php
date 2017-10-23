<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Просмотр</title>
</head>
<body>

<? $edit = $_GET['edit'] ?>
  <p>Изменение файла </p>
  <p><? echo $edit ?></p>

 <p>Введите новое имя файла </p>
 <form action="main.php" method="post">
 <input type="text" name="newfilename"> <br>
 <input type="submit" value="Изменить"/>
 </form>


<form action="main.php" method="post">
<textarea><? require_once 'main.php'; open($edit) ?></textarea>
<input type="submit" value="Изменить"/>
</form>


<form action="index.php" method="post">
<input type="submit" value="На главную"/>
</form>

 </body>
</html>
