<?php
  session_start();
  require_once 'connect.php';
  

  $full_name = $_POST['full_name'];
  $login = $_POST['login'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $password_confirm = $_POST['password_confirm'];


  $string = 'Location: ../registr.php';
  

  if ($password === $password_confirm) {

    $path = 'uploads/' .time().$_FILES['avatar']['name'];
    if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../'. $path)){
      
      $_SESSION['massage'] = 'Ошибка при загрузке';
      header($string);
    };

    $password = md5($password);//не шифрует пороль

    mysqli_query($connect, "INSERT INTO `user` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) 
    VALUES (NULL, '$full_name ', '$login', '$email', '$password', '$path')");
    $_SESSION['massage'] = 'регистрация прошла успешно';
    header('Location: ../index.php');


  } else {
    
    $_SESSION['massage'] = 'Пороли не совподают';
    header($string);
    
  }

?>
