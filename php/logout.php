<?php
// Удаление куки с именем 'auth'
setcookie('auth', '', time() - 36000, '/');

// Перенаправление пользователя на страницу входа
header("location:http://satiksme.webexteam.eu/auth_page.php");
exit();
?>
