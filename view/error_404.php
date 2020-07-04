<?php $title = 'TimeMix - Ошибка'; ?>

<?php ob_start() ?>


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
                            Что-то из данных было введено не корректно, пожалуйста перепроверьте данные
                        </h4>
                    </div>

                </div>

                <div class="modal-footer">
                    <a href="index.php" class="btn btn-white">Обратно</a>
                </div>

            </div>
        </div>
    </div>
</div>
</body>

<?php $content = ob_get_clean(); ?>

<?php include "view_admin/templates/layout.php";