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
<form action="index.php" method="post">
 <p>Режим просмотра <br><? echo $OpenFile; ?></p>
<textarea rows="10" cols="20" ><? open($OpenFile); ?></textarea>
 <p><input type="submit" value="На главную"/></p>
</form>


 </body>
</html>
