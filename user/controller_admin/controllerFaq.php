<?php

class controllerFaq extends RenderTemplate {

    public $modelFaqAction;
    public $model_admin;

    public function __construct() {
        $this->modelFaqAction = new modelFaqAction();
        $this->model_admin = new model_admin();
    }

    public function imageAddForm($faqOne) {
        $user = $this->model_admin->user_One($_SESSION['ID_User']);
        $html = $this->render_template('view_admin/imageAddForm.php', array('faqOne' => $faqOne), array('user' => $user));
        return $html;
    }

    public function imageAddResult($id) {
        $test = $this->modelFaqAction->imageAdd($id);
        $html = $this->render_template('view_admin/imageAddResult.php', array('test' => $test), array());
        return $html;
    }

    public function loginEditForm($faqOne) {
        $user = $this->model_admin->user_One($_SESSION['ID_User']);
        $html = $this->render_template('view_admin/loginEditForm.php', array('faqOne' => $faqOne), array('user' => $user));
        return $html;
    }

    public function loginEditResult($id) {
        $test = $this->modelFaqAction->loginEdit($id);
        $html = $this->render_template('view_admin/loginEditResult.php', array('test' => $test), array());
        return $html;
    }

    public function userEditForm($faqOne) {
        $user = $this->model_admin->user_One($_SESSION['ID_User']);
        $html = $this->render_template('view_admin/userEditForm.php', array('faqOne' => $faqOne), array('user' => $user));
        return $html;
    }

    public function userEditResult($id) {
        $test = $this->modelFaqAction->userInfoEdit($id);
        $html = $this->render_template('view_admin/userResultForm.php', array('test' => $test), array());
        return $html;
    }

    public function emailEditForm($faqOne) {
        $user = $this->model_admin->user_One($_SESSION['ID_User']);
        $html = $this->render_template('view_admin/emailEditForm.php', array('faqOne' => $faqOne), array('user' => $user));
        return $html;
    }

    public function emailEditResult($id) {
        $test = $this->modelFaqAction->emailEdit($id);
        $html = $this->render_template('view_admin/emailResultForm.php', array('test' => $test), array());
        return $html;
    }
    
    public function search_view($text) {
        $user = $this->model_admin->user_One($_SESSION['ID_User']);
        $result_search = $this->modelFaqAction->getSearch($text);
        $html = $this->render_template("view_admin/search_result.php", array('result_search' => $result_search), array('user' => $user));
        return $html;
    }
    
    public function user_one($id) {
        $userOne = $this->modelFaqAction->userOne($id);
        $user = $this->model_admin->user_One($_SESSION['ID_User']);
        $html = $this->render_template('view_admin/userOne.php', array('userOne' => $userOne), array('user' => $user));
        return $html;
    }
    
    public function userAddForm($id) {
        $userOne = $this->modelFaqAction->userOne($id);
        $user = $this->model_admin->user_One($_SESSION['ID_User']);
        $html = $this->render_template('view_admin/userAddForm.php', array('user' => $user), array('userOne' => $userOne));
        return $html;
    }
        
    public function userAddResult($id) {
        $test = $this->modelFaqAction->addFriend($id);
        $html = $this->render_template('view_admin/userAddResultForm.php', array('test' => $test), array());
        return $html;
    }
    
    public function request_view() {
        $user = $this->model_admin->user_One($_SESSION['ID_User']);
        $requests = $this->modelFaqAction->getRequests();
        $html = $this->render_template("view_admin/requests.php", array('requests' => $requests), array('user' => $user));
        return $html;
    }
    
    public function userConfirmForm($id) {
        $userOne = $this->modelFaqAction->userOne($id);
        $user = $this->model_admin->user_One($_SESSION['ID_User']);
        $html = $this->render_template('view_admin/userConfirmForm.php', array('user' => $user), array('userOne' => $userOne));
        return $html;
    }
        
    public function userConfirmResult($id) {
        $test = $this->modelFaqAction->confirmFriend($id);
        $html = $this->render_template('view_admin/userConfirmResultForm.php', array('test' => $test), array());
        return $html;
    }
    
    public function userNoConfirmForm($id) {
        $userOne = $this->modelFaqAction->userOne($id);
        $user = $this->model_admin->user_One($_SESSION['ID_User']);
        $html = $this->render_template('view_admin/userNoConfirmForm.php', array('user' => $user), array('userOne' => $userOne));
        return $html;
    }
        
    public function userNoConfirmResult($id) {
        $test = $this->modelFaqAction->noConfirmFriend($id);
        $html = $this->render_template('view_admin/userNoConfirmResultForm.php', array('test' => $test), array());
        return $html;
    }
    
    public function allFriends() {
        $allFriends = $this->modelFaqAction->getFriends();
        $user = $this->model_admin->user_One($_SESSION['ID_User']);
        $html = $this->render_template('view_admin/allFriends.php', array('user' => $user), array('allFriends' => $allFriends));
        return $html;
    }

}
