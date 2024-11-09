<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
    <link rel="stylesheet" href="../style.css">
</head>
<main>
<div class="uslugi_glav">
  <h1>УСЛУГИ</h1>
  <div class="block_uslugi_glav">
  <a href="">
  <div class="block_uslugi_glav1">
    <img src="img/usluga1.png" alt="usluga">
    <p>Проектирование <br> металлоконструкций</p>
  </div>
  </a>
  <a href="">
  <div class="block_uslugi_glav1">
    <img src="img/usluga2.png" alt="usluga">
    <p>Консультации</p>
  </div>
  </a>
  </div>
</div>


<div class="advantages_glav">
  <h1>ПРЕИМУЩЕСТВА</h1>
  <div class="block_advantages_glav">
    <div class="advantages">
      <img src="img/specialist.png" alt="specialist">
      <h2>Опытные специалисты</h2>
      <p>В нашей команде работают эксперты с многолетним <br> 
      опытом в области проектирования <br>металлоконструкций.</p>
    </div>
    <div class="advantages">
      <img src="img/podhod.png" alt="podhod">
      <h2>Индивидуальный подход</h2>
      <p>Мы учитываем уникальные требования каждого <br> 
      клиента и предлагаем персонализированные <br> решения.</p>
    </div>
    <div class="advantages">
      <img src="img/service.png" alt="service">
      <h2>Комплексный сервис</h2>
      <p>Обеспечиваем поддержку на всех <br>
      этапах — от идеи до реализации <br>проекта.</p>
    </div>
  </div>
</div>


<div class="proekt_glav">
  <h1>ПРОЕКТЫ</h1>
  <div class="proekt1_glav">
    <img src="img/proekt1.png" alt="proekt">
  </div>
  <div class="proekt2_glav">
    <img src="img/proekt2.png" alt="proekt">
  </div>
  <div class="proekt3_glav">
    <img src="img/proekt3.png" alt="proekt">
  </div>
  <div class="proekt4_glav">
    <img src="img/proekt4.png" alt="proekt">
  </div>
</div>


<div class="zayavka_glav">
  <h1>Оставьте заявку</h1>
  <p>Наши сотрудники свяжутся с вами для <br> уточнения деталей</p>
  <button class="btn_zayavka_glav"><a href="#openModalzayavka">Оставить заявку</a></button>
</div>


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
                    <input type="name" name="name" id="name" placeholder="Ваше имя" autocomplete="off">
                    <input type="text" name="tel" id="tel" placeholder="Телефон" autocomplete="off">
                    <button type="submit" class="btn_zayavka_modal">Оставить заявку</button>
                </form>
            </div>
          </div>
        </div>
      </div>
</main>



