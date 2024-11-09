<?php
session_start();
//echo '<pre>';
//print_r($_SESSION);
//echo '</pre>'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<link rel="stylesheet" href="style.css">
    <header class="header2">
    <a href="index.php" onclick="$('main').load('index.php');"><img src="img/logo2.png" alt="logo"></a>
        <div class="nav2">
                <li><a onclick="$('main').load('templates/uslugi.php');">Услуги</a></li>
                <li><a onclick="$('main').load('templates/projects.php');">Проекты</a></li>
                <li><a onclick="$('main').load('templates/contact.php');">Контакты</a></li>
                <li><a onclick="$('main').load('templates/onas.php');">О нас</a></li>
                <?php if (!isset($_SESSION['tel'])): ?>
                <li><a href="#openModalvhod" class="avtor"><img src="img/user2.png" alt="user">Вход</a></li>
            <?php else: ?>
                <li><a href="index1.php" class="avtor"><img src="img/user2.png" alt="user">Профиль</a></li>
            <?php endif; ?>
                <button class='btn_zayavka'><a href="#openModalzayavka">Оставить заявку</a></button>
        </div>
    </header>

    <div id="openModalzayavka" class="modal_zayavka">
        <div class="modal-dialog-zayavka">
          <div class="modal-content-zayavka">
            <div class="modal-header-zayavka">
              <a href="#closezayavka" title="Close" class="close-zayavka">×</a>
            </div>
            <div class="modal-body-zayavka">    
                <form action="" id="form-zayavka" class='form-zayavka'>
                  <h3>Оставьте заявку</h3>
                  <p>Наши сотрудники свяжутся с вами в ближайшее <br> 
                  рабочее время для уточнения деталей</p>
                    <input type="name" name="name" id="name" placeholder="Ваше имя" autocomplete="off" required>
                    <input type="text" name="tel" id="tel" placeholder="Телефон" autocomplete="off" required>
                    <button type="submit" class="btn_zayavka_modal">Оставить заявку</button>
                </form>
            </div>
          </div>
        </div>
      </div>

      <script>

var modal = document.getElementById("#openModalvhod");
var span = document.getElementsByClassName("close-vhod")[0];

window.onload = function() {
    modal.style.display = "block"; // Показываем модальное окно
}

span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script> 
</body>
</html>