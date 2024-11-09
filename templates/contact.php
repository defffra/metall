<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Контакты</title>
    <link rel="stylesheet" href="../style.css">
</head>
<main>   
<div class="contacts">
  <h1>КОНТАКТЫ</h1>
        <div class="info_contact">
            <img src="img/photo_address.png" alt="address">
            <div class="info_text">
            <p class='address_contact'><img src="img/address_contact.png" alt="address"><b>Адрес:</b> г. Ижевск, <br>Воткинское шоссе, 298а</p>
            <p class='time_contact'><img src="img/time_contact.png" alt="time"><b>Время работы:</b> <br> пн-пт: с 8.00 до 18.00 <br> сб-вс: выходной</p>
            <p class='tel_contact'><img src="img/tel_contact.png" alt="tel"><b>Телефон:</b> +7 912 0144294</p>
            <p class='email_contact'><img src="img/email_contact.png" alt="email"><b>E-mail: </b>adasda@mail.ru</p><br>
            <a href="" class='tg'><img src="img/tg.png" alt="tg"></a>
            <a href="" class='vk'><img src="img/vk.png" alt="vk"></a>
        </div>
            <div class="info_block">
                <p><b>Реквизиты</b></p>
                <ul>
                    <li><i>ОГРНИП:</i> 316183200050565</li>
                    <li><i>ИНН:</i> 182809450995</li>
                    <li><i>Вид предпринимательства:</i> <br> Индивидуальный предприниматель</li>
                    <li><i>Дата регистрации:</i> 11 января 2016 г.</li>
                </ul>
            </div>
        </div>
        <div class='karta' style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/44/izhevsk/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;"></a><a href="https://yandex.ru/maps/44/izhevsk/house/votkinskoye_shosse_298/YUoYdQNnQEAEQFtsfXVxdHtmYQ==/?ll=53.347954%2C56.905755&source=serp_navig&utm_medium=mapframe&utm_source=maps&z=17" style="color:#eee;font-size:12px;position:absolute;top:14px;"></a><iframe src="https://yandex.ru/map-widget/v1/?ll=53.347954%2C56.905755&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgoyMjA3MTc1ODk3EmvQoNC-0YHRgdC40Y8sINCj0LTQvNGD0YDRgtGB0LrQsNGPINCg0LXRgdC_0YPQsdC70LjQutCwLCDQmNC20LXQstGB0LosINCS0L7RgtC60LjQvdGB0LrQvtC1INGI0L7RgdGB0LUsIDI5OCIKDU1kVUIVfp9jQg%2C%2C&source=serp_navig&z=17" width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
  <form action="" class='form-contact'>
            <div class="form_contact">
  <h1>Есть вопросы - <br> напиши нам!</h1>
            <input type="textarea" name="comm" class="comm_contact" placeholder="Комментарий" required >
            <input type="textarea" name="name" class="name_contact" placeholder="Ваше имя" required>
            <input type="textarea" name="tel" class="tel_contact" placeholder="Телефон" required>
            <input type="textarea" name="email" class="email_contact" placeholder="E-mail" required>
            <button class="btn_form_contact"><i>Отправить</i></button>
  </div>
  </form>

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