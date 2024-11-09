<?php
session_start();
if (!isset($_SESSION['tel'])) {
    header('Location: index.php'); 
    exit();
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="../style.css">
</head>
<main>
<div class="lichkab">
<h1>Личный кабинет</h1>
</div>
<div class="block_a">
    <a href=""><i>Личные данные</i></a>
    <a href="">Мои заявки</a>
</div>
<div class="info_user">
    <img src="img/klient.png" alt="photouser">
    <input type="file" id="file-upload">
    <button onclick="document.getElementById('file-upload').click()" class='photobtn'><i>Загрузить фото</i></button>
    <div class="info_user_dann">
    <p>ФИО: <?php echo htmlspecialchars($_SESSION['fio']); ?></p>
    <p>Телефон: <?php echo htmlspecialchars($_SESSION['tel']); ?></p>
    <p>E-mail: <?php echo htmlspecialchars($_SESSION['email']); ?></p>
    <p>Пароль: <?php echo htmlspecialchars($_SESSION['password']); ?></p>
    </div>
    <button class="sohrkab"> <a href="">Сохранить</a></button>
    <button class="exitkab"> <a href="connection/logout.php">Выйти из аккаунта </a></button>
</div>

</main>

