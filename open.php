<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Просмотр</title>
</head>
<body>


<form action="index.php" method="post">
 <p>Режим просмотра <br><? require_once 'main.php'; echo $open; ?></p>
<textarea><? require_once 'main.php'; open($open); ?></textarea>
 <p><input type="submit" value="На главную"/></p>
</form>


 </body>
</html>
