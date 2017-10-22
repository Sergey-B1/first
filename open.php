<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Просмотр</title>
</head>
<body>
<form action="" method="post">
 <p>Режим просмотра <br><? include 'main.php'; echo $open ?></p>
<textarea><? include 'main.php'; echo $fileopen ?></textarea>
 <p><input type="submit" /></p>
</form>;

 </body>
</html>
