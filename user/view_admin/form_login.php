<?php $title = 'TimeMix'; ?>
<?php
//начало сессии           !!!

if (isset($_SESSION['ID_User'])) {
    header('Location: login');
}
?>
<div class="float-left-main s-home col-md-4">
    <div class="logo-main-page">
        <img src="../public/img/brand/logo.png"/>
    </div>
    <form action="login" method="POST" class="home-content">
        <div class="form-group">
            <div class="input-group input-group-alternative mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-circle-08" id="color-5e72e4"></i></span>
                </div>
                <input class="form-control font-weight-700" placeholder="Логин" name="login" type="text" id="user" required="">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group input-group-alternative">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-lock-circle-open" id="color-5e72e4"></i></span>
                </div>
                <input class="form-control font-weight-700" name="password" placeholder="Пароль" id="pass" type="password" required="">
            </div>
        </div>
        <div class="row my-4">
            <div class="col-12">
                <div class="custom-control custom-control-alternative custom-checkbox" id="padding_left_04">
                    <label class="float-raight-reg font-weight-700" id="left_ra">
                        <span class="spanreg">У меня нет аккаунта <a href="../index.php">Присоединиться</a></span>
                    </label>
                    <label class="float-raight-reg font-weight-700">
                        <span class="spanreg">Забыли пароль ? <a href="#!">Напомнить</a></span>
                    </label>
                </div>
            </div>
        </div>
        <div class="text-center">
            <button type="submit" id="send" name="send" class="btn btn-primary mt-4 btnMobile font-weight-700">Войти в сеть</button>
        </div>
        <div class="text-center">
            <a href="../index.php" id="displayNone" class="btn btn-primary mt-4 font-weight-700">Регистрация</a>
        </div>
        <div class="text-center">
            <a href="user" id="displayNone" class="btn btn-primary mt-4 font-weight-700">Напомнить пароль</a>
        </div>
    </form>    
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
include "view_admin/templates/layoutLogin.php";
