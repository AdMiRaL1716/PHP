<?php

class AdminController extends RenderTemplate{
	public $model_admin;
        public $model;
	
	public function __construct()  
    {  
        $this->model_admin = new model_admin();
        $this->model = new Model();
    } 
    

    public function form_login_site(){
        
        $html=$this->render_template('view_admin/form_login.php', array(), array());
        return $html;
    }

    public function login_action(){
        $test=$this->model_admin->user_authentication();
        
    if(isset($test) && $test==true){
        $user = $this->model_admin->user_One($_SESSION['ID_User']);
        $html=  $this->render_template('view_admin/start_admin.php', array('user' => $user), array());
    }else{
       $html=  $this->render_template('view_admin/error_404.php', array(), array()); 
    }
        
        return $html;
        
    }

    public function logout_action(){

        session_destroy();
        unset($_SESSION['name']);
        unset($_SESSION['ID_User']);
        
        $html=$this->render_template('view_admin/form_login.php', array(), array());
        return $html;
    }











    //Страница Error
	public function error_404()
	{
		$html = $this->render_template('view_admin/error_404.php', array(), array());
		return $html;
	}

}

?>