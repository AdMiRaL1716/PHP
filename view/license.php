<?php $title = 'TimeMix - Соглашение'; ?>
<?php
ob_start();
?>


<p class="p-in-license">Соглашение: Проект еще в процессе -
    <a href="index.php">Обратно</a>
</p>

<style>
    .p-in-license {
        color: #232323;
        font-size: 20pt;
        text-transform: uppercase;
        font-weight: 600;
        text-align: center;
        margin-top: 20%;
    }
</style>

<?php
$content = ob_get_clean();
include "view/templates/layout.php";
?>