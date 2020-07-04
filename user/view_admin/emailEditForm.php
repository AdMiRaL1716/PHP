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
                                    <!--<a href="#!" class="btn btn-sm btn-primary">Сохранить</a>-->
                                    <button type="submit" class="btn btn-sm btn-primary" name="send">Сохранить</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="heading-small text-muted mb-4">Информация пользователя</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Email</label>
                                            <input type="email" id="input-username" class="form-control form-control-alternative" name="Email" placeholder="Email" value="<?php echo $faqOne->Email; ?>" required="">
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

