<?php
$title = 'TimeMix';
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
                                Приянть запрос на добавление в друзья ?
                            </h4>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <a href="requests" class="btn btn-white">Обратно</a>
                        <a href="#" class="btn btn-link text-white ml-auto" data-dismiss="modal">
                        <form action="?update" method="post">
                            <input  name="AddUser" type="text" class="form-control form-control-alternative" value="<?php echo $ThisUser = $userOne->ID_User;?>" hidden="">
                            <button type="submit" name="send" class="btn btn-link text-white ml-auto">Принять</button>
                        </form>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

<?php
$content = ob_get_clean();
include "view_admin/templates/layoutResult.php";
?>