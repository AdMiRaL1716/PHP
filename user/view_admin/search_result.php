<?php
$title = 'Поиск';
$menuActive2 = 'noActive';
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
                                Пользователь
                            </th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        <?php
                        if (count($result_search) > 0) {
                            foreach ($result_search as $faq) {
                                echo '<tr>
                                <th scope="row" class="name">
                                <div class="media align-items-center">

                                    <a href="user_one?id='.$faq['ID_User'].'" class="avatar rounded-circle mr-3" id="imageInSettings">
                                    <img alt="Image placeholder" src="../public/userImages/'.$faq['Image'].'">
                                    </a>

                                <div class="media-body">
                                    <span class="mb-0 text-sm">'.$faq['FirstName'].' '.$faq['LastName'].'</span>
                                </div>
                                </div>
                                </th>

                            <td class="budget" id="alignRight">
                                <a href="user_add?id='.$faq['ID_User'].'" class="btn btn-sm btn-info">Добавить</a>
                                <a href="" class="btn btn-sm btn-default">Написать</a>
                            </td>

                            </tr>';
                            }
                        } else {
                            echo '<tr>
                                <th scope="row" class="name">
                                <div class="media align-items-center">
                                <div class="media-body">
                                    <span class="mb-0 text-sm">Пользователь не был найден</span>
                                </div>
                                </div>
                                </tr>
                                ';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>         
</body>
<?php $content = ob_get_clean(); ?>

<?php
include "view_admin/templates/layout.php";
