<?php

session_start();

require_once '../inc/db.php';


include_once("model_admin/Model_admin.php");
include_once('../controller/Render.php');
include_once("controller_admin/Controller_admin.php");


include_once '../model/userModel.php';


include_once '../model/userOneModel.php';
include_once '../model/userEmailModel.php';
include_once '../model/userInfoModel.php';
include_once '../model/userResultModel.php';
include_once '../model/userRequestsModel.php';

include_once '../model/Model.php';
include_once 'controller_admin/controllerView.php';

include_once 'controller_admin/controllerFaq.php';

include_once 'model_admin/modelFaqAction.php';







include('route_admin/routing.php');

echo $response;
?>
