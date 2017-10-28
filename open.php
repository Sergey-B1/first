<?php require_once 'main.php';
   $FileOpen = $_GET['open']; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Просмотр</title>
</head>
<body>

 <form action="controller.php" method="post">
   <p>Режим просмотра <br>
   <?php echo $FileOpen; ?> </p>
     <textarea rows="10" cols="20" ><?php file_open($FileOpen); ?></textarea>
   <p><input type="submit" value="На главную" name="return"/></p>
</form>


 </body>
</html>
