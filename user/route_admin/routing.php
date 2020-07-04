<?php
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num=substr_count($host,'/');
$uri  = explode('/', $host)[$num];
if (isset($_SESSION['session_id'])){

if ($uri == 'login')
{
    $controller_admin=new AdminController(); 
    $response=$controller_admin->login_action();
}

elseif ($uri == 'logout')
{
    $controller_admin=new AdminController(); 
    $response=$controller_admin->logout_action();
}

elseif ($uri == '')
{
    $controller_admin=new AdminController(); 
    $response=$controller_admin->logout_action();
}

elseif($uri=="settings") {
    $controllerView = new controllerView();
    $response = $controllerView->settings();
    }
    
elseif($uri=="requests") {
    $controllerFaq = new controllerFaq();
    $response = $controllerFaq->request_view();
}

elseif($uri=="allFriends") {
    $controllerFaq = new controllerFaq();
    $response = $controllerFaq->allFriends();
}
    
elseif ($uri == 'user_one' && isset($_GET['id']) ) {
    $id=$_GET['id'];
    $controllerFaq = new controllerFaq();
    $response = $controllerFaq->user_one($id);
}

elseif($uri=='user_add') {
        ini_set("display_errors", 1);
        error_reporting(E_ERROR | E_WARNING | E_PARSE);
        $id=$_GET['id'];
        $controllerFaq = new controllerFaq();
        if(isset($_GET['inserted'])) {
            $response=$controllerFaq->userAddResult($id);
        }
        else {
            $response = $controllerFaq->userAddForm($id);
        }       
}

elseif($uri=='user_confirm') {
        ini_set("display_errors", 1);
        error_reporting(E_ERROR | E_WARNING | E_PARSE);
        $id=$_GET['id'];
        $controllerFaq = new controllerFaq();
        if(isset($_GET['update'])) {
            $response=$controllerFaq->userConfirmResult($id);
        }
        else {
            $response = $controllerFaq->userConfirmForm($id);
        }       
}

elseif($uri=='user_noconfirm') {
        ini_set("display_errors", 1);
        error_reporting(E_ERROR | E_WARNING | E_PARSE);
        $id=$_GET['id'];
        $controllerFaq = new controllerFaq();
        if(isset($_GET['update'])) {
            $response=$controllerFaq->userNoConfirmResult($id);
        }
        else {
            $response = $controllerFaq->userNoConfirmForm($id);
        }       
}


elseif ($uri == 'search' && isset($_GET['text_search'])) {
    $controllerFaq=new controllerFaq(); 
    $response = $controllerFaq->search_view($_GET['text_search']);
}
 
elseif($uri=='image_add') {
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $controllerView = new controllerView();
        $select_faq = $controllerView->select_faq();
        $faqOne = $controllerView->faqOne($id);
        $controllerFaq = new controllerFaq();
        if(isset($_GET['update'])) {
            $response=$controllerFaq->imageAddResult($id);
        }
        else {
            $response = $controllerFaq->imageAddForm($faqOne, $select_faq);
        }       
    }
    else {
	$controller_admin = new AdminController();
	$response = $controller_admin->error_404();        
    }
}

elseif($uri=='login_edit') {
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $controllerView = new controllerView();
        $select_faq = $controllerView->select_faq();
        $faqOne = $controllerView->faqOne($id);
        $controllerFaq = new controllerFaq();
        if(isset($_GET['update'])) {
            $response=$controllerFaq->loginEditResult($id);
        }
        else {
            $response = $controllerFaq->loginEditForm($faqOne, $select_faq);
        }     
    }
    else {
	$controller_admin = new AdminController();
	$response = $controller_admin->error_404();        
    }
}

elseif($uri=='user_edit') {
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $controllerView = new controllerView();
        $select_faq = $controllerView->select_faq();
        $faqOne = $controllerView->faqOne($id);
        $controllerFaq = new controllerFaq();
        if(isset($_GET['update'])) {
            $response=$controllerFaq->userEditResult($id);
        }
        else {
            $response = $controllerFaq->userEditForm($faqOne, $select_faq);
        }
    }
    else {
	$controller_admin = new AdminController();
	$response = $controller_admin->error_404();        
    }
}

elseif($uri=='email_edit') {
    if(isset($_GET['id'])) { 
        $id = $_GET['id'];
        $controllerView = new controllerView();
        $select_faq = $controllerView->select_faq();
        $faqOne = $controllerView->faqOne($id);
        $controllerFaq = new controllerFaq();
        if(isset($_GET['update'])) {
            $response=$controllerFaq->emailEditResult($id);
        }
        else {
            $response = $controllerFaq->emailEditForm($faqOne, $select_faq);
        }  
    }
    else {
	$controller_admin = new AdminController();
	$response = $controller_admin->error_404();        
    }
}  

}

////////////////////////////////////////////////////////////////////////////////////////////////////////

elseif (!isset($_SESSION['session_id'])){
if ($uri == '' OR $uri == 'index.php' )
{
    $controller_admin=new AdminController(); 
    $response=$controller_admin->form_login_site();
}

elseif($uri=='login') {
    $controller_admin=new AdminController(); 
    $response=$controller_admin->login_action();      
}

elseif($uri=="settings") {
    $controller_admin=new AdminController(); 
    $response=$controller_admin->login_action();
}

elseif($uri=="request") {
    $controller_admin=new AdminController(); 
    $response=$controller_admin->login_action();
}

elseif($uri=="allFriends") {
    $controller_admin=new AdminController(); 
    $response=$controller_admin->login_action();
}

elseif ($uri == 'search' && isset($_GET['text_search'])) {
    $controller_admin=new AdminController(); 
    $response=$controller_admin->login_action();
}

elseif($uri=='user_one') {
    if(isset($_GET['id'])) {  
        $id = $_GET['id'];
        $controller_admin=new AdminController(); 
        $response=$controller_admin->login_action();
    }
    else {
	$controller_admin = new AdminController();
	$response = $controller_admin->error_404();        
    }
}

elseif($uri=='image_add') {
    if(isset($_GET['id'])) {  
        $id = $_GET['id'];
        $controller_admin=new AdminController(); 
        $response=$controller_admin->login_action();
        if(isset($_GET['update'])) {
           $controller_admin=new AdminController(); 
           $response=$controller_admin->login_action();
        }
        else {
            $controller_admin=new AdminController(); 
            $response=$controller_admin->login_action();
        } 
    }
    else {
	$controller_admin = new AdminController();
	$response = $controller_admin->error_404();        
    }
}

elseif($uri=='user_add') {
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $controller_admin=new AdminController(); 
        $response=$controller_admin->login_action();
        if(isset($_GET['inserted'])) {
           $controller_admin=new AdminController(); 
           $response=$controller_admin->login_action();
        }
        else {
            $controller_admin=new AdminController(); 
            $response=$controller_admin->login_action();
        } 
        }
        else {
            $controller_admin=new AdminController(); 
            $response=$controller_admin->login_action();
        } 
}

elseif($uri=='user_confirm') {
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $controller_admin=new AdminController(); 
        $response=$controller_admin->login_action();
        if(isset($_GET['update'])) {
           $controller_admin=new AdminController(); 
           $response=$controller_admin->login_action();
        }
        else {
            $controller_admin=new AdminController(); 
            $response=$controller_admin->login_action();
        } 
        }
        else {
            $controller_admin=new AdminController(); 
            $response=$controller_admin->login_action();
        } 
}

elseif($uri=='user_noconfirm') {
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $controller_admin=new AdminController(); 
        $response=$controller_admin->login_action();
        if(isset($_GET['update'])) {
           $controller_admin=new AdminController(); 
           $response=$controller_admin->login_action();
        }
        else {
            $controller_admin=new AdminController(); 
            $response=$controller_admin->login_action();
        } 
        }
        else {
            $controller_admin=new AdminController(); 
            $response=$controller_admin->login_action();
        } 
}
    
elseif($uri=='login_edit') {
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $controller_admin=new AdminController(); 
        $response=$controller_admin->login_action();
        if(isset($_GET['update'])) {
            $controller_admin=new AdminController(); 
            $response=$controller_admin->login_action();
        }
        else {
            $controller_admin=new AdminController(); 
            $response=$controller_admin->login_action();
        } 
    }
    else {
	$controller_admin = new AdminController();
	$response = $controller_admin->error_404();        
    }
}

elseif($uri=='user_edit') {
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $controller_admin=new AdminController(); 
        $response=$controller_admin->login_action();
        if(isset($_GET['update'])) {
            $controller_admin=new AdminController(); 
            $response=$controller_admin->login_action();
        }
        else {
        $controller_admin=new AdminController(); 
        $response=$controller_admin->login_action();
        }
    }
    else {
	$controller_admin = new AdminController();
	$response = $controller_admin->error_404();        
    }
}

elseif($uri=='email_edit') {
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $controller_admin=new AdminController(); 
        $response=$controller_admin->login_action();
        if(isset($_GET['update'])) {
            $controller_admin=new AdminController(); 
            $response=$controller_admin->login_action();
        }
        else {
            $controller_admin=new AdminController(); 
            $response=$controller_admin->login_action();
        }          
    }
    else {
	$controller_admin = new AdminController();
	$response = $controller_admin->error_404();        
    }
}

//-----------------------------------------------

else
{	
    $controller_admin = new AdminController();
    $response = $controller_admin->error_404();
}

}

?>