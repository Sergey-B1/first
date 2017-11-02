<?php require_once 'main.php';
 $FileDelete = $_GET['delete'];?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.css">
  <title>Предупреждение</title>
</head>
<body>

<form class="form-group" action="controller.php" method="post">
  <div style="width:300px; margin:auto"><p>Вы действительно хотите удалить файл <?php echo $FileDelete; ?>?</p></div>
     <input type="hidden" value="<?php echo $FileDelete; ?>" name="FileDelete"/>
     <div style="width:150px; margin:auto">
       <input class="btn btn-primary" type="submit" value="Нет" name="delete_no"/>
       <input style="background-color:red; border-color:red" class="btn btn-primary" type="submit" value="Да" name="delete_yes"/>
    </div>
</form>

 </body>
</html>
