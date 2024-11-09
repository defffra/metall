<div id="openModalreg" class="modal_reg">
        <div class="modal-dialog-reg">
            <div class="modal-content-reg">
                <div class="modal-header-reg">
                    <h3 class="modal-title-reg">РЕГИСТРАЦИЯ</h3>
                    <a href="#closereg" title="Close" class="close-reg">×</a>
                </div>
                <div class="modal-body-reg">    
                    <form action="connection/reg.php" method="POST" id="form-reg" class='form-reg'>
                        <input type="text" name="fio" id="fio" placeholder="ФИО" autocomplete="off" required>
                        <input type="email" name="email" id="email" placeholder="E-mail" autocomplete="off" required>
                        <input type="text" name="tel" id="tel_reg" placeholder="Телефон" autocomplete="off" required>
                        <input type="password" name="password" id="password_reg" placeholder="Пароль" required>
                        <input type="password" name="confirm_password" id="confirm_password" placeholder="Повтор пароля" required>
                        <button type="submit" class="btn_reg">Зарегистрироваться</button>
                        <a href="#openModalvhod"><i>Есть аккаунт? <mark>Войти</mark></i></a>
                    </form>
                </div>
            </div>
        </div>
    </div>