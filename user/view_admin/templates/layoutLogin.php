<!doctype html>
<html lang="ru-RU">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/gif" sizes="84x86" href="public/img/fav.gif">
        <meta name="description" content="Портфолио Александра Кропачева. Здесь Вы можете найти работы сделанные мной.">
        <meta name="keywords" content="Портфолио Александра Кропачева, Mycode.ee, разработчик программного обеспечения, веб-разработчик">
        <meta charset="UTF-8">
        <?php echo '<title>' . $title . '</title>' ?>
        <link href="../public/img/brand/favicon.png" rel="icon" type="image/png">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <link href="../public/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
        <link href="../public/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
        <link href="../public/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />
        <link href="../public/demo/main.css" rel="stylesheet" />
    </head>
    <body class="bg-default">

        <?php
        if (isset($_SESSION['ID_User'])) {
            ?>


            <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
                <div class="container-fluid">
                    <!-- Toggler -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- Brand -->
                    <a class="navbar-brand pt-0" href="login">
                        <img src="../public/img/brand/logo.png" class="navbar-brand-img" alt="...">
                    </a>
                    <!-- User -->
                    <ul class="nav align-items-center d-md-none">
                        <li class="nav-item dropdown">
                            <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ni ni-bell-55"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
                                <a class="dropdown-item" href="">Заявки</a>
                                <a class="dropdown-item" href="">Сообщения</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="">Новости сайта</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle">
                                        <?php
                                        echo '<img alt="Image placeholder" src="../public/userImages/'.$_SESSION['image'].'
                                             ">';
                                            ?>
                                    </span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                                <a href="login" class="dropdown-item">
                                    <i class="ni ni-circle-08"></i>
                                    <span>Мой профиль</span>
                                </a>
                                <a href="faq" class="dropdown-item">
                                    <i class="ni ni-settings-gear-65"></i>
                                    <span>Настройки</span>
                                </a>
                                <a href="" class="dropdown-item">
                                    <i class="ni ni-support-16"></i>
                                    <span>Поддержка</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="logout" class="dropdown-item">
                                    <i class="ni ni-user-run"></i>
                                    <span>Выход</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <!-- Collapse -->
                    <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                        <!-- Collapse header -->
                        <div class="navbar-collapse-header d-md-none">
                            <div class="row">
                                <div class="col-6 collapse-brand">
                                    <a href="">
                                        <img src="../public/img/brand/logo.png">
                                    </a>
                                </div>
                                <div class="col-6 collapse-close">
                                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                                        <span></span>
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Form -->
                        <form class="mt-4 mb-3 d-md-none" method="GET" action="search?text=<?php echo $_GET['text_search']; ?>">
                            <div class="input-group input-group-rounded input-group-merge">
                                <input type="search" class="form-control form-control-rounded form-control-prepended font-weight-600" placeholder="Поиск" aria-label="Search" name="text_search" required="">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <span class="fa fa-search"></span>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- Navigation -->
                        <ul class="navbar-nav">
                            <li class="nav-item  class=" active" ">
                                <a class=" nav-link active " href="login"> <i class="ni ni-circle-08 text-primary"></i> Профиль
                                </a>
                            </li>
                            <!--<li class="nav-item">
                                <a class="nav-link " href="./examples/icons.html">
                                    <i class="ni ni-world text-blue"></i> Новости
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="./examples/maps.html">
                                    <i class="ni ni-chat-round text-orange"></i> Сообщения
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="./examples/profile.html">
                                    <i class="ni ni-single-02 text-yellow"></i> Друзья
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="./examples/tables.html">
                                    <i class="ni ni-spaceship text-red"></i> Группы
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./examples/login.html">
                                    <i class="ni ni-image text-info"></i> Фотографии
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./examples/register.html">
                                    <i class="ni ni-folder-17 text-pink"></i> Файлы
                                </a>
                            </li>-->
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="main-content">
                <!-- Navbar -->
                <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
                    <div class="container-fluid">
                        <!-- Brand -->
                        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href=""><?php echo $title; ?></a>
                        <!-- Form -->
                        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto" method="GET" action="search?text=<?php echo $_GET['text_search']; ?>">
                            <div class="form-group mb-0">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                                    </div>
                                    <input class="form-control font-weight-600" placeholder="Поиск" type="text" name="text_search" required="">
                                </div>
                            </div>
                        </form>
                        <!-- User -->
                        <ul class="navbar-nav align-items-center d-none d-md-flex">
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ni ni-bell-55"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
                                    <a class="dropdown-item" href="">Заявки</a>
                                    <a class="dropdown-item" href="">Сообщения</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="">Новости сайта</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="media align-items-center">
                                        <span class="avatar avatar-sm rounded-circle">
                                            <?php
                                        echo '<img alt="Image placeholder" src="../public/userImages/'.$_SESSION['image'].'
                                             ">';
                                            ?>
                                        </span>
                                        <div class="media-body ml-2 d-none d-lg-block">
                                            <span class="mb-0 text-sm  font-weight-bold"><?php echo $_SESSION['name']; ?></span>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                                    <a href="login" class="dropdown-item">
                                        <i class="ni ni-circle-08"></i>
                                        <span>Мой профиль</span>
                                    </a>
                                    <a href="faq" class="dropdown-item">
                                        <i class="ni ni-settings-gear-65"></i>
                                        <span>Настройки</span>
                                    </a>
                                    <a href="" class="dropdown-item">
                                        <i class="ni ni-support-16"></i>
                                        <span>Поддержка</span>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="logout" class="dropdown-item">
                                        <i class="ni ni-user-run"></i>
                                        <span>Выход</span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>







                <?php
            }
            ?>  


            <?php echo $content; ?>

        </div>
    </div>


    <script src="../public/js/plugins/jquery/dist/jquery.min.js"></script>
    <script src="../public/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../public/js/argon-dashboard.min.js?v=1.1.0"></script>
</body>
</html>