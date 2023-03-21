<?php
  session_start()
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

<!--Форма регистрации-->


<form action="vandor/signup.php" method="post" enctype="multipart/form-data">
  <label >ФИО</label>
  <input type="text" name="full_name" placeholder="Введите свое полное имя">
  <label >Логин</label>
  <input type="text" name="login" placeholder="Введите свой логин">
  <label >Почта</label>
  <input type="email" name="email" placeholder="Введите адрес своей посты">
  <label >Изображение профиля</label>
  <input type="file" name="avatar">
  <label >Пароль</label>
  <input type="password" name="password" placeholder="Введите пароль">
  <label >Подтверждение пороля</label>
  <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
  <button>Войти</button>
  <p>
    У вас уже есть акауин? - <a href="index.php">Авторизируйтесь</a>!
  </p>
    <?php 
    if ( $_SESSION['massage']){
      echo '<p class="msg">'. $_SESSION['massage'].'</p>';
    }
      
    unset( $_SESSION['massage']);
    ?>

  
</form>
  
</body>
</html>