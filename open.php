<?php require_once 'main.php';
   $FileOpen = $_GET['open']; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.css">
  <title>Просмотр</title>
</head>
<body>

<div style="width:400px; margin:auto">
  <div class="form-group">
   <form class="form-group" action="controller.php" method="post">
     <div style="width:180px; margin:auto"><h5>Режим просмотра</h5></div>
     <div style="width:100px; margin:auto"><?php echo $FileOpen; ?></div>
       <textarea class="form-control" rows="15"><?php file_open($FileOpen); ?></textarea>
     <input class="btn btn-primary" type="submit" value="На главную" name="return"/>
  </form>
  </div>
</div>

 </body>
</html>
