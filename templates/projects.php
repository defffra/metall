<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Проекты</title>
    <link rel="stylesheet" href="../style.css">
</head>
<main>   
<div class="projects">
  <h1>ПРОЕКТЫ</h1>
  <div class="photo_projects">
    <div class="photo_projects1">
        <img src="img/proekt1.png" alt="proekt1">
        <p>Резервуар</p>
    </div>
    <div class="photo_projects2">
        <img src="img/proekt2.png" alt="proekt1">
        <p>Емкость</p>
    </div>
    <div class="photo_projects3">
        <img src="img/proekt3.png" alt="proekt1">
        <p>Емкость</p>
    </div>
    <div class="photo_projects4">
        <img src="img/proekt4.png" alt="proekt1">
        <p>Система очистки</p>
    </div>
</div>
<div class="otziv">
  <h1>ОТЗЫВЫ</h1>
  <button class="btnotziv"><i>Оставить отзыв</i></button>
  </div>

  <?php require '../modal/reg_modal.php'; ?>
<?php require '../modal/vhod_modal.php'; ?>
</main>
  
<script>
$(".block_usluga").each(function() {
    let more = $(this).find(".show-more");
    let hide = $(this).find(".hide-content");
    hide.hide();
    more.click(function() {
        hide.slideToggle();
        more.text(more.text() == "Скрыть" ? "Показать полностью" : "Скрыть");
    });
});
</script>

