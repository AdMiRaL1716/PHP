<?php

class controllerView extends RenderTemplate {
    public $model;
    public $model_admin;
    public function __construct() {
        $this->model = new Model();
        $this->model_admin = new model_admin();
}
   
    
    public function settings() {
        
        $faq = $this->model->getUserList();
        $user = $this->model_admin->user_One($_SESSION['ID_User']);
        $html = $this->render_template('view_admin/settings.php', array('faq'=>$faq), array('user' => $user));
        
        return $html;
    }
    
   
    
    public function select_faq() {
        $faq = $this->model->getUserList();
        return $faq;
    }
    
        public function faqOne($id) {
        $faqOne = $this->model->getUserOne($id);
        return $faqOne;
        
    }
   
    
}
