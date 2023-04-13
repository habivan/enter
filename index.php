<?php
  session_start();
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

<!--Форма авторизации-->


<form action="vandor/signin.php" method="post">
  <label for="">Логин</label>
  <input type="text" name="Login" placeholder="Введите свой логин">
  <label for="">Пароль</label>
  <input type="password" name="password" placeholder="Введите пороль">
  <button type="submit">Войти</button>
  <p>
    У вас нет аккаунта? - <a href="registr.php">Зарегистрируйтесь</a>!
  </p>
  <?php 
    if ( $_SESSION['massage']):?>
      <p class="msg"><?=$_SESSION['massage']?></p>;//не выводит сообщение 
    
    <?php 
    unset( $_SESSION['massage']);
    endif;
    ?>


  
</form>
  
</body>
</html>