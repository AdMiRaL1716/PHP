<?php
$title = 'Заявки';
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
                                Заявки в друзья
                            </th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        <?php
                        if (count($requests) > 0) {
                            
                                foreach ($requests as $userReq){ 
                                echo '<tr>
                                <th scope="row" class="name">
                                <div class="media align-items-center">

                                    <a href="user_one?id='.$userReq['ID_User'].'" class="avatar rounded-circle mr-3" id="imageInSettings">
                                    <img alt="Image placeholder" src="../public/userImages/'.$userReq['UserImage'].'">
                                    </a>

                                <div class="media-body">
                                    <span class="mb-0 text-sm">'.$userReq['FName'].' '.$userReq['LName'].'</span>
                                </div>
                                </div>
                                </th>

                            <td class="budget" id="alignRight">
                                <a href="user_confirm?id='.$userReq['ID_User'].'" class="btn btn-sm btn-info">Принять</a>
                                <a href="user_noconfirm?id='.$userReq['ID_User'].'" class="btn btn-sm btn-default">Отклонить</a>
                            </td>

                            </tr>';
                                }
                            
                        } else {
                            echo '<tr>
                                <th scope="row" class="name">
                                <div class="media align-items-center">
                                <div class="media-body">
                                    <span class="mb-0 text-sm">Нет заявок в друзья</span>
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
