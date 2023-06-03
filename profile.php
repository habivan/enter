<?php
  session_start();
  if(!empty($_SESSION['user'])){
    header('Location: /index.php');
  }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Авторизация и регистрация</title>
  <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<form>
  <img src="<?=$_SESSION['user']['avatar']?>" width="100" alt="">
  <h2><?=$_SESSION['user']['full_name']?></h2>
  <a href="#"><?=$_SESSION['user']['email']?></a>
  <a href="vandor/logout.php" class="log">Выход</a>
</form>
  
</body>
</html>