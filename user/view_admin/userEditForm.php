<?php $title = 'Редактирование'; 
$menuActive2 = 'noActive';
$menuActive1 = 'noActive'; 
?>
<?php
    foreach ($user as $one) {
        $linkInPage = '<a href="settings">';
        $buttonPage = '<button type="button" class="btn btn-info">Обратно</button>';
    }
    ?>  
<?php
ob_start();
?>    
<body style="overflow: auto;">
            <form action="?id=<?php echo $faqOne->ID_User; ?>&update " method="post" style="display: contents" enctype="multipart/form-data">
                <div class="col-xl-12 order-xl-1">
                    <div class="card bg-secondary shadow">
                        <div class="card-header bg-white border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">Изменить профиль</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <button type="submit" class="btn btn-sm btn-primary" name="send">Сохранить</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="heading-small text-muted mb-4">Информация пользователя</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Имя</label>
                                            <input type="text" id="input-username" class="form-control form-control-alternative" name="FirstName" placeholder="Имя" value="<?php echo $faqOne->FirstName; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Фамилия</label>
                                            <input type="text" id="input-username" class="form-control form-control-alternative" name="LastName" placeholder="Фамилия" value="<?php echo $faqOne->LastName; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Страна</label>
                                            <input type="text" id="input-username" class="form-control form-control-alternative" name="Country" placeholder="Страна" value="<?php echo $faqOne->Country; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Город</label>
                                            <input type="text" id="input-username" class="form-control form-control-alternative" name="City" placeholder="Город" value="<?php echo $faqOne->City; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Образование</label>
                                            <input type="text" id="input-username" class="form-control form-control-alternative" name="Education" placeholder="Образование" value="<?php echo $faqOne->Education; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Работа</label>
                                            <input type="text" id="input-username" class="form-control form-control-alternative" name="Work" placeholder="Работа" value="<?php echo $faqOne->Work; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Возраст</label>
                                            <input type="number" id="input-username" class="form-control form-control-alternative" name="Age" placeholder="Возраст" value="<?php echo $faqOne->Age; ?>" min="14" max="120">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Личная информация</label>
                                            <input type="text" id="input-username" class="form-control form-control-alternative" name="Description" placeholder="Личная информация" value="<?php echo $faqOne->Description; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>       
</body>




<?php
$content = ob_get_clean();
include_once 'view_admin/templates/layout.php';

