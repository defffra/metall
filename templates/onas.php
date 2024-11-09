<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Контакты</title>
    <link rel="stylesheet" href="../style.css">
</head>
<main>  
<div class="projects">
  <h1>О НАС</h1>
    <div class="block_onas">
        <img src="img/onas.png" alt="onas">
        <p>Наша компания "Проектирование различных металлоконструкций" <br>специализируется на разработке разнообразных металлоконструкций,<br> включая емкости, резервуары и системы очистки. <br>
        Мы нацелены на удовлетворение потребностей клиентов, предлагая <br>высококачественные и надежные металлоконструкции для различных <br>отраслей промышленности.</p>
    </div>
    <div class="komanda">
        <h1>НАША КОМАНДА</h1>
        <div class="rab">
        <div class="rab1">
            <img src="img/komanda.png" alt="komanda">
            <h2>Антон Колупаев</h2>
            <p><i>Генеральный директор</i></p>
            </div>
            <div class="rab2">
            <img src="img/komanda.png" alt="komanda">
            <h2>Иван Мартынов</h2>
            <p><i>Инженер-проектировщик</i></p>
            </div>
            <div class="rab3">
            <img src="img/komanda.png" alt="komanda">
            <h2>Михаил Иванов</h2>
            <p><i>Менеджер проектов</i></p>
            </div>
        </div>
    </div>
  </div>

  <?php require '../modal/reg_modal.php'; ?>
  <?php require '../modal/vhod_modal.php'; ?>

  <script>
        $(document).ready(function() {
            $(window).scrollTop(0);
        });
    </script>
</main>