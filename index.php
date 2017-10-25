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
  <form action="main.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file"><br/>
    <input type="submit" value="Загрузить">
  </form>

<!--  <form action="create.php" method="post">
    <input type="submit" value="Создать файл вручную">
  </form> -->

  <div class="">
  <?php require_once 'main.php';
     unset($files[0], $files[1]);
      foreach ($files as $value) {?>
        <div><a href='open.php?open=<?= $value ?>'><?= $value ?></a></div>
        <div><a href='edit.php?edit=<?= $value ?>'>Редактировать</a></div>
        <div><a href='delete.php?delete=<?= $value ?>'>Удалить</a></div>
        <br>
<?php } ?>
  </div>




</body>
</html>
