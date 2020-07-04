<?php
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num=substr_count($host,'/');
$uri  = explode('/', $host)[$num];

if ($uri == '' OR $uri == 'index.php' )
{
	$controller = new Controller();
	$response = $controller->start_site();
}

elseif ($uri=="new_user") {
    $controller = new Controller();
    $response=$controller->form_register();
}

elseif ($uri=="license") {
    $controller = new Controller();
    $response=$controller->license();
}
    
elseif ($uri=="register") {
    $controller = new Controller();
    $response=$controller->user_register();
}

else
{	
	$controller = new Controller();;
	$response = $controller->error_404();
}
?>