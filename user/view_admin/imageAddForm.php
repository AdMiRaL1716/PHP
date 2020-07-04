<?php $title = 'Добавление'; 
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
                                    <h3 class="mb-0">Изменить фото, идеальное изображение 800x800</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <button type="submit" class="btn btn-sm btn-primary" name="send">Сохранить</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="heading-small text-muted mb-4">Фотография</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-image">Выберите новую</label>
                                            <input type="file" id="input-image" class="form-control form-control-alternative" name="Image" required="">
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