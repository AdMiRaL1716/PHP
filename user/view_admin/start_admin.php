<?php
$title = 'Профиль';
$menuActive1 = 'active';
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
 
    
</body>
<?php $content = ob_get_clean(); ?>

<?php
include "view_admin/templates/layout.php";
