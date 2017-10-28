  <?php require_once 'main.php';?>.
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Сайт</title>
</head>
<link rel="stylesheet" href="./index.css">
<body>
  <form action="controller.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file"><br/>
    <input type="submit" value="Загрузить" name="download">
  </form>
  <div class="">
  <?php
   unset($files[0], $files[1]);
      foreach ($files as $value) {?>
        <div><a href='open.php?open=<?php echo $value ?>'><?php echo $value ?></a></div>
        <div><a href='edit.php?edit=<?php echo $value ?>'>Редактировать</a></div>
        <div><a href='delete.php?delete=<?php echo $value ?>'>Удалить</a></div>
        <br>

<?php } ?>
  </div>




</body>
</html>
