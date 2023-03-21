<?php

$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = '';          // пароль
$name = 'test';      // имя базы данных


$connect = mysqli_connect( $host, $user, $pass, $name);

if (!$connect) {
  die('Error connect to datdBase');
}

?>