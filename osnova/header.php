<?php
session_start();
//echo '<pre>';
//print_r($_SESSION);
//echo '</pre>'; 
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="headerglav">
        <a href="index.php" onclick="$('main').load('index.php');"><img src="img/logo1.png" alt="logo"></a>
        <div class="nav_glav">
            <li><a onclick="loadContent('templates/uslugi.php', 'osnova/header1.php');">Услуги</a></li>
            <li><a onclick="loadContent('templates/projects.php', 'osnova/header1.php');">Проекты</a></li>
            <li><a onclick="loadContent('templates/contact.php', 'osnova/header1.php');">Контакты</a></li>
            <li><a onclick="loadContent('templates/onas.php', 'osnova/header1.php');">О нас</a></li>
            <?php if (!isset($_SESSION['tel'])): ?>
                <li><a href="#openModalvhod" class="avtor"><img src="img/user1.png" alt="user">Вход</a></li>
            <?php else: ?>
                <li><a href="index1.php" class="avtor"><img src="img/user1.png" alt="user">Профиль</a></li>
            <?php endif; ?>
            <button class='btn_zayavka'><a href="#openModalzayavka">Оставить заявку</a></button>
        </div>
        <h1>Проектирование <br> металлоконструкций <br> в Ижевске</h1>
        <p>Мы специализируемся на создании емкостей, резервуаров, <br> систем очистки и другого емкостного оборудования.</p>
    </header>

    <? require 'modal/reg_modal.php'; ?>
    <? require 'modal/vhod_modal.php'; ?>

    <script>
function loadContent(mainUrl, headerUrl) {
    $('main').load(mainUrl);
    $('header').load(headerUrl);
}
</script>

</body>
</html>
