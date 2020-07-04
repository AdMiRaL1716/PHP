<?php
$title = 'Пользователь';
$menuActive1 = 'noActive';
$menuActive2 = 'noActive';
?>
<?php
    foreach ($user as $one) {
        $linkInPage = '<a href="user_edit?id=' . $one->ID_User . '">';
        $buttonPage = '<button type="button" class="btn btn-info">Редактировать профиль</button>';
    }
    ?>  
<?php ob_start() ?>

<body style="overflow: auto;">
 <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                <div class="card card-profile shadow">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                <?php
                                $oneImage = $userOne->Image;
                                $TwoID = $userOne->ID_User;
                                echo '<a href="">';
                                echo '<img src="../public/userImages/'.$oneImage.'" class="rounded-circle">';
                                echo '</a>';
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                        <div class="d-flex justify-content-between">
                            <a href="user_add?id=<?php echo $UserAdd = $userOne->ID_User;?>" class="btn btn-sm btn-info">Добавить</a>
                            <a href="#" class="btn btn-sm btn-default float-right">Написать</a>
                        </div>
                    </div>
                    <div class="card-body pt-0 pt-md-4">
                        <div class="row">
                            <div class="col">
                                <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                                    <div>
                                        <span class="heading">22</span>
                                        <span class="description">Друзей</span>
                                    </div>
                                    <div>
                                        <span class="heading">10</span>
                                        <span class="description">Фотографий</span>
                                    </div>
                                    <div>
                                        <span class="heading">89</span>
                                        <span class="description">Групп</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <?php
                            $oneFirst = $userOne->FirstName;
                            $oneLast = $userOne->LastName;
                            $oneCountry = $userOne->Country;
                            $oneCity = $userOne->City;
                            $oneAge = $userOne->Age;
                            $oneWork = $userOne->Work;
                            $oneEducation = $userOne->Education;
                            $oneDescription = $userOne->Description;
                            echo '<h3>';
                            echo ''.$oneFirst.' '.$oneLast.'<span class="font-weight-light">, '.$oneAge.'</span>';
                           echo  '</h3>';
                           echo  '<div class="h5 font-weight-300">';
                           echo      '<i class="ni location_pin mr-2"></i>'.$oneCity.', '.$oneCountry.'';
                           echo  '</div>';
                           echo  '<div class="h5 mt-4">';
                           echo      '<i class="ni business_briefcase-24 mr-2"></i>'.$oneWork.'';
                          echo   '</div>';
                           echo  '<div>';
                          echo       '<i class="ni education_hat mr-2"></i>'.$oneEducation.'';
                          echo   '</div>';
                          echo   '<hr class="my-4" />';
                           echo  '<p>'.$oneDescription.'</p>';
                           echo  '<a href="#">Show more</a>';
                              ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 order-xl-1">
    
</body>
<?php $content = ob_get_clean(); ?>

<?php
include "view_admin/templates/layoutUser.php";
