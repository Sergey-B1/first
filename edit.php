<?php require_once 'main.php';
$OldName = $_GET['edit'];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Просмотр</title>
  <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div style="width:500px; margin:auto">
  <div class="item"><h3>Изменение файла</h3></div>
  <div class="file-name"><p><?php echo $OldName; ?></p></div>

 <p>Здесь можно изменить имя файла </p>
 <div class="form-group">
   <form action="controller.php" method="post">
   <input type="hidden" name="OldName" value="<?php echo $OldName; ?>">
   <input class="form-control" type="text" name="NewName"> <br>
   <input class="btn btn-primary" type="submit" value="Изменить" name="name_edit_yes"/>
   </form>
 </div>

 <p>Здесь можно изменить содержимое файла</p>
 <div class="form-group">
   <form action="controller.php" method="post">
   <input type="hidden" name="OldName2" value="<?php echo $OldName; ?>">
   <textarea class="form-control" name="NewContent"><?php echo file_get_contents(DIR.$OldName); ?></textarea><br>
   <input class="btn btn-primary" type="submit" value="Изменить" name="content_edit_yes"/>
   </form>
</div>

 <form action="index.php" method="post">
 <input class="btn btn-primary" type="submit" value="Отмена"/>
 </form>

</div>
 </body>
</html>
