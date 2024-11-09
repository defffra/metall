<div id="openModalvhod" class="modal_vhod">
        <div class="modal-dialog-vhod">
            <div class="modal-content-vhod">
                <div class="modal-header-vhod">
                    <h3 class="modal-title-vhod">ВХОД</h3>
                    <a href="#closevhod" title="Close" class="close-vhod">×</a>
                </div>
                <div class="modal-body-vhod">    
                    <form action="connection/avtor.php" method="POST" id="form-vhod" class='form-vhod'>
                        <input type="text" name="tel" id="tel_vhod" placeholder="Телефон" autocomplete="off" required>
                        <input type="password" name="password" id="password_vhod" placeholder="Пароль" required>
                        <button type="submit" class="btn_vhod">Войти</button>
                        <a href="#openModalreg"><i>Нет аккаунта? <mark>Зарегистрироваться</mark></i></a>
                    </form>
                </div>
            </div>
        </div>
    </div>