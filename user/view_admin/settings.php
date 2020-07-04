<?php
$title = 'Настройки';
$menuActive2 = 'active';
$menuActive1 = 'noActive';
?>
<?php
    foreach ($user as $one) {
        $linkInPage = '<a href="user_edit?id=' . $one->ID_User . '">';
        $buttonPage = '<button type="button" class="btn btn-info">Редактировать профиль</button>';
    }
    ?>  
<?php
ob_start();
?>  

<body style="overflow: auto;">
    <div class="col-xl-12 order-xl-1">
        <div class="table-responsive" id="tableInSettings">
            <div>
                <table class="table align-items-center">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">
                                Настройка
                            </th>
                            <th scope="col" id="alignCenter">
                                Действие
                            </th>
                        </tr>
                    </thead>
                    <tbody class="list">

                        <tr>
                            <th scope="row" class="name">
                    <div class="media align-items-center">
                        <?php
                        foreach ($user as $one) {
                            echo '<a href="image_add?id=' . $one->ID_User . '" class="avatar rounded-circle mr-3" id="imageInSettings">';
                            echo '<i class="ni ni-image"></i>';
                            echo '</a>';
                        }
                        ?>
                        <div class="media-body">
                            <span class="mb-0 text-sm">Изменить фотографию</span>
                        </div>
                    </div>
                    </th>
                    <td class="budget" id="alignCenter">
                        <?php
                        foreach ($user as $one) {
                            echo'<a href="image_add?id=' . $one->ID_User . '" class="btn btn-sm btn-default">Изменить</a>';
                        }
                        ?>
                    </td>
                    </tr>
                    <tr>
                        <th scope="row" class="name">
                    <div class="media align-items-center">
                        <?php
                        foreach ($user as $one) {
                            echo '<a href="login_edit?id=' . $one->ID_User . '" class="avatar rounded-circle mr-3" id="imageInSettings">';
                            echo '<i class="ni ni-single-02"></i>';
                            echo '</a>';
                        }
                        ?>
                        <div class="media-body">
                            <span class="mb-0 text-sm">Изменить логин</span>
                        </div>
                    </div>
                    </th>
                    <td class="budget" id="alignCenter">
                        <?php
                        foreach ($user as $one) {
                            echo'<a href="login_edit?id=' . $one->ID_User . '" class="btn btn-sm btn-default">Изменить</a>';
                        }
                        ?>
                    </td>
                    </tr>
                    <tr>
                        <th scope="row" class="name">
                    <div class="media align-items-center">
                        <?php
                        foreach ($user as $one) {
                            echo '<a href="email_edit?id=' . $one->ID_User . '" class="avatar rounded-circle mr-3" id="imageInSettings">';
                            echo '<i class="ni ni-email-83"></i>';
                            echo '</a>';
                        }
                        ?>
                        <div class="media-body">
                            <span class="mb-0 text-sm">Изменить email</span>
                        </div>
                    </div>
                    </th>
                    <td class="budget" id="alignCenter">
                        <?php
                        foreach ($user as $one) {
                            echo'<a href="email_edit?id=' . $one->ID_User . '" class="btn btn-sm btn-default">Изменить</a>';
                        }
                        ?>
                    </td>
                    </tr>
                    <tr>
                        <th scope="row" class="name">
                    <div class="media align-items-center">
                        <?php
                        foreach ($user as $one) {
                            echo '<a href="user_edit?id=' . $one->ID_User . '" class="avatar rounded-circle mr-3" id="imageInSettings">';
                            echo '<i class="ni ni-badge"></i>';
                            echo '</a>';
                        }
                        ?>
                        <div class="media-body">
                            <span class="mb-0 text-sm">Изменить профиль</span>
                        </div>
                    </div>
                    </th>
                    <td class="budget" id="alignCenter">
                        <?php
                        foreach ($user as $one) {
                            echo'<a href="user_edit?id=' . $one->ID_User . '" class="btn btn-sm btn-default">Изменить</a>';
                        }
                        ?>
                    </td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>         
</body>
<?php $content = ob_get_clean(); ?>

<?php
include "view_admin/templates/layout.php";
