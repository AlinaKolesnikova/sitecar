<?php
$mysqli = mysqli_connect('localhost','root','','dt_avto');
$db_host = "localhost"; 
$db_user = "root"; // Логин БД 
$db_password = ""; // Пароль БД 
$db_base = 'dt_avto'; // Имя БД
if (mysqli_connect_errno())
{
echo 'Ошибка';
exit();
}