<?php $title = 'TimeMix'; 
$menuActive2 = 'noActive';
$menuActive1 = 'noActive'; 
?>
<?php
        $linkInPage = '<a href="login">';
        $buttonPage = '<button type="button" class="btn btn-info">На Главную</button>';

    ?>  
<?php
ob_start();
?>
<body id="bg-color-r">

<div class="col-md-4">
    <div class="modal fade show" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" style="display: block;" aria-hidden="true">
        <div class="modal-dialog modal-danger modal-dialog-centered modal-10" role="document">
            <div class="modal-content bg-gradient-danger">

                <div class="modal-header">
                    <h4 class="modal-title" id="modal-title-notification">У Вас уведомление</h4>
                </div>

                <div class="modal-body">

                    <div class="py-3 text-center">
                        <i class="ni ni-bell-55 ni-3x"></i>
                        <h4 class="heading mt-4">
                            <?php
                            if (isset($test) && $test == true) {
                                foreach ($test as $aTest) {
                                    echo $aTest;
                                }
                            } else {
                                foreach ($test as $aTest) {
                                    echo $aTest;
                                }
                            }
                            ?>
                        </h4>
                    </div>

                </div>

                <div class="modal-footer">
                    <a href="settings" class="btn btn-white">Обратно</a>
                    <a href="login" class="btn btn-link text-white ml-auto" data-dismiss="modal">На главную</a> 
                </div>

            </div>
        </div>
    </div>
</div>
</body>

<?php $content = ob_get_clean();
 include "view_admin/templates/layoutResult.php";
?>