<?php $title = 'TimeMix - Регистрация'; ?>
<?php ob_start(); ?>
<div class="float-left-main s-home col-md-4">
    <div class="logo-main-page">
        <img src="public/img/brand/logo.png"/>
    </div>
    <?php
    if (isset($test)) {
        if ($test[0] == true) {
            //ok register
            echo '<div class="allert info">Пользователь добавлен</div>';
        } elseif ($test[0] == false) {
            echo '<div class="allert info"Ошибка добавления' . $test[1] . '</div>';
        }
    } else {
        ?>
        <form id="form1" action="register" method="POST" class="home-content">
            <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-circle-08" id="color-5e72e4"></i></span>
                    </div>
                    <input class="form-control font-weight-700" placeholder="Логин" name="loginUs" type="text" required="">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-badge" id="color-5e72e4"></i></span>
                    </div>
                    <input class="form-control font-weight-700" placeholder="Имя" name="firstName" type="text" required="">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83" id="color-5e72e4"></i></span>
                    </div>
                    <input class="form-control font-weight-700" placeholder="Email" name="email" type="email" required="">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open" id="color-5e72e4"></i></span>
                    </div>
                    <input class="form-control font-weight-700" name="password" placeholder="Пароль" type="password" required="">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open" id="color-5e72e4"></i></span>
                    </div>
                    <input class="form-control font-weight-700" name="confirm" placeholder="Подтвердите пароль" type="password" required="">
                </div>
            </div>
            <div class="row my-4">
                <div class="col-12">
                    <div class="custom-control custom-control-alternative custom-checkbox">
                        <input class="custom-control-input" id="customCheckRegister" type="checkbox" required="">
                        <label class="custom-control-label font-weight-700" for="customCheckRegister">
                            <span class="text-muted">Я принимаю <a href="license" target="_blank">Соглашение</a></span>
                        </label>
                        <label class="float-raight-reg font-weight-700">
                            <span class="spanreg">У меня уже есть аккаунт <a href="user">Войти</a></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" id="send" name="send" class="btn btn-primary mt-4 btnMobile font-weight-700"> <!--data-dismiss='modal'-->Создать аккаунт</button>
            </div>
            <div class="text-center">
                <a href="user" id="displayNone" class="btn btn-primary mt-4 font-weight-700">Войти</a>
            </div>
        </form>
        <?php
    }
    ?>
</div>
<div class="float-left-main2 col-md-8">
    <div class="context">
        <h1>Добро пожаловать <br> В TimeMix</h1>
    </div>


    <div class="area" >
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div >
</div>
<?php $content = ob_get_clean(); ?>
<?php
include "view/templates/layout.php";
